@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-sm-12">
            <div class="card myFormBorder">
                <div class="card-header myFormHeader"><h1>{{ __('Zaloguj się') }}</h1></div>
                <div class="card-body myForm ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Adres email') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6 offset-lg-4 text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Zapomniałeś hasła?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0 ">
                            <div class="col-lg-6 offset-lg-4 text-center">
                                <button type="submit" class="btn mySubmitButton">
                                    {{ __('Zaloguj się') }}
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
