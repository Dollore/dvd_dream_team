
@extends('layouts.app')

<link href="{{ asset('js/package/css/swiper.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/netflix_carousel_styles.css') }}" rel="stylesheet">

@section('content')
    
</div> <!-- Zamykam myFlex z layouta -->
    <!-- Swiper -->
  <h1>BACKTOPAST</h1>

<div class="netflix-slider">
  <h2>Popularne</h2>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="{{ asset('img/films/test1.jpg') }}" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="{{ asset('img/films/test1.jpg') }}" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="{{ asset('img/films/test1.jpg') }}" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="{{ asset('img/films/test1.jpg') }}" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="{{ asset('img/films/test1.jpg') }}" alt="Movie Title"></div>
      <!--<div class="swiper-slide"><img src="img/6.jpg" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="img/7.jpg" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="img/8.jpg" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="img/9.jpg" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="img/10.jpg" alt="Movie Title"></div>-->
    </div>
    <!-- Add Pagination -->
    <!--<div class="swiper-pagination"></div> -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>

<!--<div class="netflix-slider">
  <h2>Continue watching...</h2>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="{{ asset('img/films/test1.jpg') }}" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="{{ asset('img/films/test1.jpg') }}" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="{{ asset('img/films/test1.jpg') }}" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="{{ asset('img/films/test1.jpg') }}" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="{{ asset('img/films/test1.jpg') }}" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="img/6.jpg" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="img/7.jpg" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="img/8.jpg" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="img/9.jpg" alt="Movie Title"></div>
      <div class="swiper-slide"><img src="img/10.jpg" alt="Movie Title"></div>
    </div> -->
    <!-- Add Pagination -->
    <!-- <div class="swiper-pagination"></div> 
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> 
  </div>
</div> -->

<!-- Swiper JS -->
<script href="{{ asset('js/package/js/swiper.min.js') }}"> </script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 6,
    spaceBetween: 10,
    slidesPerGroup: 2,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>

<div> <!-- Żeby się nie gryzl z zamknieciem myFlex z layouta -->

@endsection
   