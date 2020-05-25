<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/film/{id_film}', 'FilmController@show')->name('film');

Route::get('/profile', 'ProfileController@index')->name('profile')->middleware(['verified', 'auth']);

Auth::routes([
    'verify' => true
]);

Route::get('/home', 'HomeController@index')->name('home')->middleware(['verified', 'auth']);


Route::get('/updateUsername', 'UpdateController@username')->name('updateUsername')->middleware(['verified', 'auth']);
Route::get('/updateEmail', 'UpdateController@email')->name('updateEmail')->middleware(['verified', 'auth']);
Route::get('/updatePassword', 'UpdateController@password')->name('updatePassword')->middleware(['verified', 'auth']);

Route::post('/editUsername', 'UpdateController@editUsername')->name('editUsername')->middleware(['verified', 'auth']);
Route::post('/editEmail', 'UpdateController@editEmail')->name('editEmail')->middleware(['verified', 'auth']);
Route::post('/editPassword', 'UpdateController@editPassword')->name('editPassword')->middleware(['verified', 'auth']);

Route::post('/search', 'SearchController@index')->name('search');

Route::post('/borrow', 'BorrowController@store')->name('borrow')->middleware(['verified', 'auth']);

Route::get('/test', 'TestController@index')->name('test');