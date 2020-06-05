@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-sm-12">
            <div class="card myFormBorder">
                <div class="card-header myFormHeader">
                    <h1>{{ __('Zweryfikuj swój adres email') }}</h1>
                </div>

                <div class="card-body myForm">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Nowa wiadomość z weryfikacją adresu email została wysłana.') }}
                    </div>
                    @endif

                    {{ __('Na Twój adres email została wysłana wiadomość z prośbą o potwierdzenie rejestracji. ') }}
                    {{ __('Jeżeli jej nie otrzymałeś') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline myResendButton">{{ __('kliknij tutaj, aby wysłać ją ponownie') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection