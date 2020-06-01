@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/user_profile_styles.css') }}" >
<link href="{{ asset('css/confirm_popup.css') }}" rel="stylesheet">

<script>
    const Confirm = {
        open(options) {
            options = Object.assign({}, {
                title: '',
                message: '',
                okText: 'OK',
                cancelText: 'Cancel',
                oncancel: function () { }
            }, options);

            const html = `
            <div class="confirm">
                <div class="confirm__window">
                    <div class="confirm__titlebar">
                        <span class="confirm__title">${options.title}</span>
                        <button class="confirm__close">&times;</button>
                    </div>
                    <div class="confirm__content">${options.message}</div>
                    <div class="confirm__buttons">
                        <form method="POST" action="{{ route('delete') }}">
                            @csrf
                            <button type="submit" class="confirm__button confirm__button--ok confirm__button--fill">${options.okText} </button>
                        </form>
                        <button class="confirm__button confirm__button--cancel">${options.cancelText}</button>
                    </div>
                </div>
            </div>
        `;

            const template = document.createElement('template');
            template.innerHTML = html;

            // Elements
            const confirmEl = template.content.querySelector('.confirm');
            const btnClose = template.content.querySelector('.confirm__close');
            const btnOk = template.content.querySelector('.confirm__button--ok');
            const btnCancel = template.content.querySelector('.confirm__button--cancel');

            confirmEl.addEventListener('click', e => {
                if (e.target === confirmEl) {
                    options.oncancel();
                    this._close(confirmEl);
                }
            });

            btnOk.addEventListener('click', () => {
                options.onok();
                this._close(confirmEl);
            });

            [btnCancel, btnClose].forEach(el => {
                el.addEventListener('click', () => {
                    options.oncancel();
                    this._close(confirmEl);
                });
            });

            document.body.appendChild(template.content);
        },

        _close(confirmEl) {
            confirmEl.classList.add('confirm--close');

            confirmEl.addEventListener('animationend', () => {
                document.body.removeChild(confirmEl);
            });
        }
    };
</script>

<h2 class="myWhiteCenter">Ogólne ustawienia konta</h2>
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

            <div class="col-12 button_film">
        <button id="deleteButton" type="button" class="btn mySubmitButton btn-lg myBorrowButton">Usuń konto</button>
        <script>
            document.querySelector('#deleteButton').addEventListener('click', () => {
                Confirm.open({
                    title: 'Usuwanie konta',
                    message: 'Czy na pewno chcesz usunąć swoje konto?',
                })
            });
        </script>

        @if ($notDelete)
            <span style="color:red;">Nie można usunąć konta, ponieważ nie zwróciłeś wszystkich filmów</span>
        @endif
        </div>

    </div>

@endsection