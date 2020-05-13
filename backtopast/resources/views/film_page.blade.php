
@extends('layouts.app')

@section('content')
    <div class="row justify-content-md-center">

            <div class="col">
                <h1>Tytuł filmu</h1>
            </div>

            <div class="col-md-auto">
                
            </div>
            
            <div class="col button_film" >
                <button type="button" class="btn btn-primary" >Zamów</button>
            </div>
            
        </div>
        <div class="row">
            <div class="col karuzela justify-content-md-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
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
        </div>
        <div class="row">
            <div class="row">
                <div class="col">
                    <h1>Tytuł filmu</h1>
                </div>
            </br>
                <div>
                    <div class="col">
                        <span>Gatunek</span>
                    </div>
                    <br>
                    <div class="col">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel aspernatur ipsam, dolor culpa tempora consectetur. Adipisci quidem, eos beatae nisi repellat quibusdam, sunt doloribus illum voluptatibus distinctio, nesciunt error nam!</span>
                    </div>
                    <br>
                    <div class="row ">
                        <div class="col-sm col-6 col-sm-4">
                            <span>rezyser</span>
                        </div>
                        <div class="col-sm col-6 col-sm-4">
                            aktorzy
                        </div>
                    </div>
                </div>
        </div>

@endsection