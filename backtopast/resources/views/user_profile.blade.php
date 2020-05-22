@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/user_profile_styles.css') }}" >
<h2 class="myWhiteCenter">Ogólne ustawienia konta</h2>
    <!--<div id="myChangeSettings"> -->
        <div class="container">
            <table class="table table-hover table-dark">
                <tr>
                    <td>Imię i nazwisko:</td>
                    <td>Hieronim Dupogrzybek</td>
                </tr>
                <tr>
                    <td>Nazwa użytkownika:</td>
                    <td>hieronimous</td>
                    <td class="text-center"><button class=" btn btn-light">Zmień nazwę</button></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>hieronim@gmail.com</td>
                    <td class="text-center"><button class=" btn btn-light">Zmień email</button></td>
                </tr>
                <tr>
                    <td>Hasło:</td>
                    <td>******</td>
                    <td class="text-center"><button class=" btn btn-light">Zmień hasło</button></td>
                </tr>
                <tr>
                    <td>Telefon:</td>
                    <td>666123561</td>
                    <td></td>
                </tr>
            </table>
        </div>
    <!--</div>-->
@endsection