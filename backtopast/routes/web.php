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

Route::get('/profile', function() {
    return view('user_profile');
})->name('profile');;

Auth::routes([
    'verify' => true

]);

Route::get('/home', 'HomeController@index')->name('home')->middleware(['verified', 'auth']);


Route::get('/test', 'TestController@index')->name('test');