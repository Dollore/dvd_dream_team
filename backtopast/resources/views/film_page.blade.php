@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/film_page_styles.css') }}">
<link href="{{ asset('js/package/css/swiper.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/film_carousel_styles.css') }}" rel="stylesheet">

<div class="row d-flex justify-content-md-center ">

    <div class="myTitle">
        <h1>Tytuł filmu</h1>
    </div>
</div> <!-- Zamykam myFlex z layouta -->
</div>

<div class="netflix-slider ">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('img/films/contratiempo/3.jpg') }}" alt="Movie Title"></div>
            <div class="swiper-slide"><img src="{{ asset('img/films/zielona_mila/2.jpg') }}" alt="Movie Title"></div>
            <div class="swiper-slide"><img src="{{ asset('img/films/zielona_mila/3.jpeg') }}" alt="Movie Title"></div>
            <div class="swiper-slide"><img src="{{ asset('img/films/zielona_mila/4.jpg') }}" alt="Movie Title"></div>
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<div class="col-12 button_film ">
    <button type="button" class="btn mySubmitButton btn-lg myBorrowButton">Wypożycz</button>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Tytuł filmu</h2>
        </div>

        <div>
            <div class="col-12">
                <span>Gatunek</span>
            </div>
            <br>
            <div class="col-12">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel aspernatur ipsam, dolor culpa tempora
                    consectetur. Adipisci quidem, eos beatae nisi repellat quibusdam, sunt doloribus illum voluptatibus
                    distinctio, nesciunt error nam! lorem10000</span>
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
<!-- Swiper JS -->
<script src="{{ asset('js/package/js/swiper.js') }}"> </script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {

        init: true,
        slidesPerView: 1,
        slidesPerGroup: 1,
        slidesPerGroupSkip: 1,
        updateOnWindowResize: true,
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        setWrapperSize: true,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },

        autoplay: {
            delay: 4000,
        },

    });

</script>

<div class="py-4 myFlex">
    <!-- Żeby się nie gryzl z zamknieciem myFlex z layouta -->

    @endsection