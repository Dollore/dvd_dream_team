
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/user_profile_styles.css') }}" >
<h2 class="myWhiteCenter">Ogólne ustawienia konta</h2> 
    <div id="myChangeSettings">
        <div class="container">
            <table>
                <tr>
                    <td>Imię i nazwisko:</td>
                    <td>Hieronim Dupogrzybek</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nazwa użytkownika:</td>
                    <td>hieronimous</td>
                    <td><button class="myButtonOnlyText btn btn-secondary">noproblem</button></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>hieronim@gmail.com</td>
                    <td><button class="myButtonOnlyText btn btn-secondary">noproblem</button></td>
                </tr>
                <tr>
                    <td>Hasło:</td>
                    <td>******</td>
                    <td><button class="myButtonOnlyText btn btn-secondary">noproblem</button></td>
                </tr>
                <tr>
                    <td>Telefon:</td>
                    <td>666123561</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>

@endsection