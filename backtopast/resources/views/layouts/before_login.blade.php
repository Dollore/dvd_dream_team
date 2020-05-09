<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wypożyczalnia DVD</title>
    <link rel="stylesheet" href="/front/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/front/css/styles.css" >

</head>

<body>

 <!-- glowny div -->
<div id="container" class="container_css">     

    <!-- poczatek navbar - navbar przed zalogowaniem -->
    <div id="navbar" class="child_navbar">      
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Just an image -->
            <nav class="navbar ">
                <a class="navbar-brand" href="#">
                    <img src="/img/logo.png" width="30" height="30" alt="">
                </a>
            </nav>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link url_text" href="index.html">Główna</a>
                    </li>
                    
                </ul>
                    <button class="btn my-2 my-sm-0 url_text button_standard" type="submit">Login</button>
            </div>
        </nav>
    </div>

    @yield('content')

    <!-- stopka -->
    <div id="footer" class="child_footer content_footer">   
        <div id="social" class="">
            <!--Jeśli nie widać to adblock blokuje nie wiem czemu-->
            <a href="#" class="" target="_blank"><img src="img/social/png/facebook.png" class="image" alt="facebook"></a>
            <a href="#" class="" target="_blank"><img src="img/social/png/instagram.png" class="image"  alt="instagram"></a>
            <a href="#" class="" target="_blank"><img src="img/social/png/twitter.png" class="image" alt="twitter"></a>
            <a href="#" class="" target="_blank"><img src="img/social/png/youtube.png" class="image" alt="youtube"></a>
            <!-- "Icon made by Freepik perfect from www.flaticon.com"-->
        </div>

        <div id="info" class="">
            <a href="" class="info_a">Prywatność</a>
            <a href="" class="info_a">Pomoc</a>
            <a href="" class="info_a">Cookies</a>
            <a href="" class="info_a">O nas</a>
        </div>
    </div>

</div>

    <script src="/front/js/jquery-3.5.1.js"></script>
    <script src="/front/js/bootstrap.min.js"></script>

</body>
</html>