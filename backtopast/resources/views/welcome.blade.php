@extends('layouts.app')

<link href="{{ asset('js/package/css/swiper.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/netflix_carousel_styles.css') }}" rel="stylesheet">

@section('content')

</div> <!-- Zamykam myFlex z layouta -->

<h1>BACKTOPAST</h1>
<div class="netflix-slider ">
  <h2 class="myh2">Popularne</h2>
  <div class="swiper-container">
    <div class="swiper-wrapper">

      @foreach ($popular as $film)

        <div class="swiper-slide"><a href="{{route('film', $film->id_film)}}"><img src="{{ asset('img/films/'.$film->pathname.'/1.jpg') }}"
            alt="Movie Title"></a></div>

      @endforeach

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>

<div class="netflix-slider">
  <h2 class="myh2">Ostatnio dodane</h2>
  <div class="swiper-container">
    <div class="swiper-wrapper">
        @foreach ($recent as $film)

          <div class="swiper-slide"><a href="{{route('film', $film->id_film)}}"><img src="{{ asset('img/films/'.$film->pathname.'/1.jpg') }}"
                alt="Movie Title"></a></div>

        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>

<!-- Swiper JS -->
<script src="{{ asset('js/package/js/swiper.js') }}"> </script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {

    init: true,/*
    slidesPerView: 5,
    spaceBetween: 10,
    slidePerGroup: 5,*/
    updateOnWindowResize: true,
    grabCursor: true,
    loop: true,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      // when window width is >= 320px
      0: {
        slidesPerView: 1,
        spaceBetween: 0,
        slidesPerGroup: 1
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 2,
        spaceBetween: 10,
        slidesPerGroup: 2
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 3,
        spaceBetween: 10,
        slidesPerGroup: 3
      },
      1080: {
        slidesPerView: 4,
        spaceBetween: 10,
        slidesPerGroup: 4
      },
      1366: {
        slidesPerView: 5,
        spaceBetween: 10,
        slidesPerGroup: 5
      },
      1440: {
        slidesPerView: 6,
        spaceBetween: 10,
        slidesPerGroup: 6
      },
      1600: {
        slidesPerView: 7,
        spaceBetween: 10,
        slidesPerGroup: 7
      },
    }
  });

</script>

<div class="py-4 myFlex">
  <!-- Żeby się nie gryzl z zamknieciem myFlex z layouta -->

  @endsection