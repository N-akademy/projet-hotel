<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<title>Projet Hotel </title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">The Blue Sky Hotel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
                <li><a class="nav-link"href="{{ route('rooms') }}">Liste des Chambres</a>
                    <ul class="drop-menu">    
                @if(Auth::check())
                    @if(Auth::user()->role=='Gérant')
                        <li><a class="nav-link" href="{{ route('createRoom') }}">Créer une Chambre</a></li>
                    @endif
                @endif                 
                    </ul>
                </li>
                <li><a  class="nav-link"href="{{ route('products') }}">Catalogue
                    <ul class="drop-menu">
                @if(Auth::check())
                    @if(Auth::user()->role=='Gérant')
                        <li><a class="nav-link"href="{{ route('createProduct') }}">Créer un Produit</a></li>
                    @endif
                @endif    
                    </ul>
                </li>
                @if(Auth::check())
                    @if(Auth::user()->role=='Gérant')
                <li><a class="nav-link"href="{{ route('clients') }}">Liste des Clients</a></li>
                <li><a class="nav-link"href="{{ route('createClient') }}">Créer un Client</a></li>
                <li><a class="nav-link"href="{{ route('staffs') }}">Liste des Employées</a></li>
                <li><a class="nav-link"href="{{ route('createStaff') }}">Créer un Employé</a></li>
                <li><a class="nav-link"href="{{ route('users') }}">Liste des usagers</a></li>
                <li><a class="nav-link"href="{{ route('createUser') }}">Créer un usager</a></li>
                    @endif
                @endif
            </ul>
               
                @guest
            <ul class="nav navbar-nav navbar-right">    
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a></li>
                @if (Route::has('register'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a></li>
                </ul>
                @endif
                @else
                <ul class="nav-item dropdown">
                    <li class="nav-item">
                        <a id="navbarDropdown"href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            </ul>
            </div>
        </nav>
    </header>
<main>
​
    <div>
        @yield('content')
    </div>
</main>
<!-- Footer -->
<section id="footer">
	<div class="container">
		<div class="row">
				
            <p>The Blue Sky Hotel </p>
            <p class="h6">&copy All rights Reversed.Norhen Wachani Développeuse de renom</p>
				
        </div>
	</div>
</section>
	<!-- ./Footer -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>