@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/user_profile_styles.css') }}" >
<h2 class="myWhiteCenter">Ogólne ustawienia konta</h2>
    <!--<div id="myChangeSettings"> -->
        <div class="container">
            <table class="table myTable">
                <tr>
                    <td>Imię i nazwisko:</td>
                    <td colspan="2">{{ $user->firstname }} &nbsp; {{ $user->lastname }}  </td>
                </tr>
                <tr>
                    <td>Nazwa użytkownika:</td>
                    <td>{{ $user->username }} </td>
                    <td class="text-center"><a href="{{ route('updateUsername') }}"> <button class=" btn btn-light">Zmień</button> </a> </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $user->email }} </td>
                    <td class="text-center"><a href="{{ route('updateEmail') }}"> <button class=" btn btn-light">Zmień</button> </a> </td>
                </tr>
                <tr>
                    <td>Hasło:</td>
                    <td>******</td>
                    <td class="text-center"><a href="{{ route('updatePassword') }}"> <button class=" btn btn-light">Zmień</button> </a> </td>
                </tr>
            </table>
        </div>
    <!--</div>-->
@endsection