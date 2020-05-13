
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/film_page_styles.css') }}" >
<div class="container">
    <div class="row d-flex justify-content-between">

            <div class="myTitle" >
                <h1>Tytuł filmu</h1>
            </div>

            <div class="col-md-auto">
                
            </div>
            

            
        </div>
        <div class="row">
            <div class="col-12 karuzela">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/films/zielona_mila/1.jpeg') }}" class="d-block img-fluid" alt="Karta tytułowa">
                        </div>
                        
                        <div class="carousel-item">
                            <img src="{{ asset('img/films/zielona_mila/2.jpg') }}" class="d-block img-fluid" alt="cast">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Poprzednie</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Następne</span>
                    </a>
                </div>
            </div>
        
            <div class="col-12 button_film " >
            <button type="button" class="btn mySubmitButton btn-lg myBorrowButton" >Wypożycz</button>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <h2>Tytuł filmu</h2>
                </div>
            </br>
                <div>
                    <div class="col-12">
                        <span>Gatunek</span>
                    </div>
                    <br>
                    <div class="col-12">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel aspernatur ipsam, dolor culpa tempora consectetur. Adipisci quidem, eos beatae nisi repellat quibusdam, sunt doloribus illum voluptatibus distinctio, nesciunt error nam! lorem10000</span>
                    </div>
                    <br>
                    <div class="row ">
                        <div class="col-sm-12 col-md-6">
                            <span>rezyser</span>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            aktorzy
                        </div>
                    </div>
                </div>
        </div>
</div>
@endsection