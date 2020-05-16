@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-sm-12">
            <div class="card myFormBorder">
                <div class="card-header myFormHeader"><h1>{{ __('Zarejestruj się') }}</h1></div>

                <div class="card-body myForm">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Nazwa użytkownika') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="firstname" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Imię') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Nazwisko') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Numer telefonu') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Adres email') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Hasło') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Potwierdź hasło') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-lg-6 col-md-12 offset-lg-5 col-sm-12">
                                <button type="submit" class="btn  mySubmitButton">
                                    {{ __('Zarejestruj się') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
