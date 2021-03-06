@extends('layouts.app')

@section('content')
<link href="{{ asset('js/package/css/swiper.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/film_carousel_styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/confirm_popup.css') }}" rel="stylesheet">

<script>
    const Confirm = {
        open(options) {
            options = Object.assign({}, {
                title: '',
                message: '',
                okText: 'OK',
                cancelText: 'Cancel',
                onok: function () {

                },
                oncancel: function () { }
            }, options);

            const html = `
            <div class="confirm">
                <div class="confirm__window">
                    <div class="confirm__titlebar">
                        <span class="confirm__title">${options.title}</span>
                        <button class="confirm__close">&times;</button>
                    </div>
                    <div class="confirm__content">${options.message}</div>
                    <div class="confirm__buttons">
                        <form method="POST" action="{{ route('borrow') }}">
                            @csrf
                            <button type="submit" name="film_id" value="{{ $film->id_film }}" class="confirm__button confirm__button--ok confirm__button--fill">${options.okText} </button>
                        </form>
                        <button class="confirm__button confirm__button--cancel">${options.cancelText}</button>
                    </div>
                </div>
            </div>
        `;

            const template = document.createElement('template');
            template.innerHTML = html;

            // Elements
            const confirmEl = template.content.querySelector('.confirm');
            const btnClose = template.content.querySelector('.confirm__close');
            const btnOk = template.content.querySelector('.confirm__button--ok');
            const btnCancel = template.content.querySelector('.confirm__button--cancel');

            confirmEl.addEventListener('click', e => {
                if (e.target === confirmEl) {
                    options.oncancel();
                    this._close(confirmEl);
                }
            });

            btnOk.addEventListener('click', () => {
                options.onok();
                this._close(confirmEl);
            });

            [btnCancel, btnClose].forEach(el => {
                el.addEventListener('click', () => {
                    options.oncancel();
                    this._close(confirmEl);
                });
            });

            document.body.appendChild(template.content);
        },

        _close(confirmEl) {
            confirmEl.classList.add('confirm--close');

            confirmEl.addEventListener('animationend', () => {
                document.body.removeChild(confirmEl);
            });
        }
    };
</script>

<div class="row d-flex justify-content-md-center ">

    <div class="myTitle">
        <h1>{{ $film->title }}</h1>
    </div>
</div> <!-- Zamykam myFlex z layouta -->
</div>

<div class="netflix-slider ">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('img/films/'.$film->pathname.'/1.jpg') }}" alt="Movie Title">
            </div>
            <div class="swiper-slide"><img src="{{ asset('img/films/'.$film->pathname.'/2.jpg') }}" alt="Movie Title">
            </div>
            <div class="swiper-slide"><img src="{{ asset('img/films/'.$film->pathname.'/3.jpg') }}" alt="Movie Title">
            </div>
            <div class="swiper-slide"><img src="{{ asset('img/films/'.$film->pathname.'/4.jpg') }}" alt="Movie Title">
            </div>
        </div>

        <div class="swiper-pagination "></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<div class="container myfont-16 mt-3">
    
@if (!Auth::guest())
    <div class="col-12 button_film mb-3">
        <button id="borrowButton" type="button" class="btn mySubmitButton btn-lg myBorrowButton">Wypożycz</button>
        <script>
            document.querySelector('#borrowButton').addEventListener('click', () => {
                Confirm.open({
                    title: 'Wypożycz film',
                    message: 'Czy na pewno chcesz wypożyczyć ten film?',
                    onok: () => {

                    }
                })
            });
        </script>
    </div>
@else
    
    <div class="col-12 text-center myfont-16 mb-3"><a href="{{ route('login') }}" class="btn btn-link p-0 m-0 align-baseline myResendButton">Zaloguj się</a>, aby wypożyczyć film.</div>
    
@endif

    <div class="row justify-content-center pt-3">
        <div class="col-12 pl-0 text-center">
            <h2>{{ $film->title }}</h2>
        </div>

        <div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-0 text-center">
                <span>
                    @foreach ($categories as $cat)

                    {{ $cat->category_name }} &nbsp;

                    @if (!$loop->last)
                    / &nbsp;
                    @endif

                    @endforeach

                </span>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-0 mb-3 text-center">
                    <span>{{ $film->description }}</span>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-0 d-flex justify-content-center">
                    <table>
                        <tr>
                            <td class="text-left">Reżyser: &nbsp;</td>
                            <td><span>{{ $director->director_name }}</span></td>
                        </tr>

                        @foreach ($actors as $actor)

                            <tr>

                                <td> 
                                    @if (($loop->first))
                                        Aktorzy:
                                    @endif

                                </td>

                                <td>
                                    {{ $actor->firstname }} {{ $actor->lastname }} 
                                </td>

                            </tr>

                        @endforeach

                        <tr>
                            <td class="text-left">Rok premiery: &nbsp;</td>
                            <td><span>{{ $film->premiere_year }}</span></td>
                        </tr>
                    </table>
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
        //grabCursor: true,
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
            clickable: true,
        },

        autoplay: {
            delay: 4000,
        },

    });

</script>

<div class="py-4 myFlex">
    <!-- Żeby się nie gryzl z zamknieciem myFlex z layouta -->

    @endsection