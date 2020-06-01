@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-sm-12">
            <div class="card myFormBorder">
                <div class="card-header myFormHeader">
                    <h1>{{ __('Filtruj') }}</h1>
                </div>

                <div class="card-body myForm">
                    <form method="POST" action="{{ route('filter') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Reżyser') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input id="director" type="text" class="form-control @error('director') is-invalid @enderror" 
                                name="director" value="{{ old('director') }}" autocomplete="director">

                                @error('director')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Gatunek') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input id="category" type="text"
                                    class="form-control @error('category') is-invalid @enderror" name="category"
                                    value="{{ old('category') }}" autocomplete="category">

                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start_date" class="col-lg-4 col-md-12 col-sm-12 col-form-label text-lg-right">{{ __('Data premiery') }}</label>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <input id="start_date" type="number"
                                    class="form-control @error('start_date') is-invalid @enderror" name="start_date"
                                    value="{{ old('start_date') }}" autocomplete="start_date">

                                @error('start_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <input id="end_date" type="number"
                                    class="form-control @error('end_date') is-invalid @enderror" name="end_date"
                                    value="{{ old('end_date') }}" autocomplete="end_date">

                                @error('start_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-lg-6 offset-lg-4 text-center">
                                <button type="submit" class="btn  mySubmitButton">
                                    {{ __('Filtruj') }}
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