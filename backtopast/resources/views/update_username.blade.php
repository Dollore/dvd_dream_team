@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-sm-12">
            <div class="card myFormBorder">
                <div class="card-header myFormHeader">
                    <h1>{{ __('Zmień nazwę użytkownika') }}</h1>
                </div>

                <div class="card-body myForm">
                    <form method="POST" action="{{ route('editUsername') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Nazwa użytkownika') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" 
                                name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-lg-6 offset-lg-4 text-center">
                                <button type="submit" class="btn  mySubmitButton">
                                    {{ __('Edytuj') }}
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