@extends('front.base')

@section('layout')
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse navbar-dark">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-brand mr-auto">
        <a class="" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" width="180px">
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><em class="fa fa-home"></em> Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}"><em class="fa fa-shopping-bag"></em> Produits</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}"><em class="fa fa-info" aria-hidden="true"></em> Contact</a></li>
            <li class="nav-item nav-link separator"> | </li>

            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Inscription</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mon Panier</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                    <a class="dropdown-item" href="myCart.html">Quantité</a>
                    <a class="dropdown-item" href="portfolio-1-col.html">Prix</a>
                    <a class="dropdown-item" href="portfolio-1-col.html">Voir mon Panier</a>
                </div>
            </li>
            @else
            @if (Auth::user()->role == 'admin')
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle separator-menu" href="#" id="navbarDropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-user" aria-hidden="true"></em>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                    <a class="dropdown-item" href="{{ route('admin.home') }}"><em class="fa fa-desktop"></em> Backoffice</a>
                    <a class="dropdown-item" href="#"><em class="fa fa-edit"></em> Mes informations</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        <em class="fa fa-power-off mr-1"></em> Se déconnecter
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
            <div class="fixed-plugin">
                <div class="dropdown show-dropdown">
                    <a href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-cog fa-2x"> </i>
                    </a>
                    <ul class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(-231px, -105px, 0px); top: 65px; left: -80px; will-change: transform;">
                        <li class="button-container">
                            <a class="btn btn-primary btn-block btn-fill" href="#"><em class="fa fa-dashboard"></em> Dashboard</a>
                            <a class="btn btn-primary btn-block btn-fill" href="{{ route('admin.conversations.index') }}"><em class="fa fa-envelope"></em> Messagerie</a>
                            <a class="btn btn-primary btn-block btn-fill" href="{{ route('admin.interface.index') }}"><em class="fa fa-desktop"></em> Interface</a>
                            <a class="btn btn-primary btn-block btn-fill" href="{{ route('admin.product.index') }}"><em class="fa fa-product-hunt"></em> Produits</a>
                            <a class="btn btn-primary btn-block btn-fill" href="#"><em class="fa fa-shopping-cart"></em> Commandes</a>
                            <a class="btn btn-primary btn-block btn-fill" href="#"><em class="fa fa-balance-scale"></em> Stocks</a>
                        </li>
                    </ul>
                </div>
            </div>
            @else
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle separator-menu" href="#" id="navbarDropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-user" aria-hidden="true"></em>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                    <a class="dropdown-item" href="#"><em class="fa fa-edit"></em> Mes informations</a>
                    <a class="dropdown-item" href="#"><em class="fa fa-tasks"></em> Mes commandes</a>
                    <a class="dropdown-item" href="#"><em class="fa fa-envelope"></em> Services après vente</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        <em class="fa fa-power-off mr-1"></em> Se déconnecter
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
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
            @endif
            @endguest
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main class="container-fluid">
    @yield('content')
</main>

<footer class="container-fluid">
    <p class="m-0 py-5 text-center text-white">Copyright &copy; eCommercer 2018</p>
</footer>
@endsection