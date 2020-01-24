<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/linearicons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
                <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">The Blue Sky Hotel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul >
                <li >
                        <a  href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('rooms') }}">Liste des Chambres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Catalogue</a>
                </li>
@if(Auth::check())
    @if(Auth::user()->role=='Gérant')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('createRoom') }}">Créer une Chambre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('staffs') }}">Liste des Employées</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('createStaff') }}">Créer un Employé</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clients') }}">Liste des Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('createClient') }}">Créer un Client</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('createProduct') }}">Créer un Produit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users') }}">Liste des usagers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('createUser') }}">Créer un usager</a>
                </li>


     @endif
@endif   
                @guest
                <ul class="nav navbar-nav navbar-right">
                    <li >
                        <a  href="{{ route('login') }}">{{ __('Connexion') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                    </li>

                </ul>
                @endif
                @else
                <ul>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span></a>
​                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Déconnexion') }}
                        </a>
​
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    </li>
                @endguest
                </ul>
            </div>
        </nav>
    </header>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="main-menu mobile-menu">   ​
                                
                            </nav>
                            <div class="top-info">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Slider Begin -->
    <div class="hero-slider">
        <div class="slider-item">
            <div class="single-slider-item set-bg" data-setbg="img/slider-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                @yield('content')
                            </div>
                            <h1>Nous esperons que vous allez bien profitez <br />de votre séjour</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-nav">
                                <a href="#" class="single-slider-nav">
                                    <img src="img/nav-1.jpg" alt="">
                                    <div class="nav-text active">
                                        <p>Pool<i class="lnr lnr-arrow-right"></i></p>
                                    </div>
                                </a>
                                <a href="#" class="single-slider-nav">
                                    <img src="img/nav-2.jpg" alt="">
                                    <div class="nav-text">
                                        <p>Sauna<i class="lnr lnr-arrow-right"></i></p>
                                    </div>
                                </a>
                                <a href="#" class="single-slider-nav last">
                                    <img src="img/nav-3.jpg" alt="">
                                    <div class="nav-text">
                                        <p>Restaurant<i class="lnr lnr-arrow-right"></i></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!-- Follow Instagram Section Begin -->
    <section class="follow-instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Follow us on Instagram @yourhotel</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Follow Instagram Section End -->

    <!-- Footer Room Pic Section Begin -->
    <div class="footer-room-pic">
        <div class="container-fluid">
            <div class="row">
                <img src="img/room-footer-pic/room-1.jpg" alt="">
                <img src="img/room-footer-pic/room-2.jpg" alt="">
                <img src="img/room-footer-pic/room-3.jpg" alt="">
                <img src="img/room-footer-pic/room-4.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Footer Room Pic Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Location</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-map-marker"></i>
                            <p>1525 Boring Lane, <br />Los Angeles, CA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Reception</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Shuttle Service</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Restaurant</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                <div class="privacy-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Photo Requests</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>