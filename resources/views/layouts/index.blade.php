<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <img src="{{ asset('img/logo.png') }}" width="15%">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home"></i> Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}"><i class="fa fa-shopping-bag"></i> Produits</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html"><i class="fa fa-info" aria-hidden="true"></i> Contact</a></li>
                        <li class="nav-item nav-link"> | </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Mon Compte</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                <a class="dropdown-item" href="portfolio-1-col.html">Suivre mes commandes</a>
                                <a class="dropdown-item" href="portfolio-1-col.html">Mes bons d'achat/cadeau</a>
                                <a class="dropdown-item" href="portfolio-1-col.html">Mes informations</a>
                                <a class="dropdown-item" href="portfolio-1-col.html">Se déconnecter</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mon Panier</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                <a class="dropdown-item" href="myCart.html">Quantité</a>
                                <a class="dropdown-item" href="portfolio-1-col.html">Prix</a>
                                <a class="dropdown-item" href="portfolio-1-col.html">Voir mon Panier</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container-fluid">
            @yield('content')
        </main>

        <footer class="container-fluid">
            <p class="m-0 py-5 text-center text-white">Copyright &copy; eCommercer 2018</p>
        </footer>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>