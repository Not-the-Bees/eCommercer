@extends('back.base')

@section('layout')
<div class="container-fluid" id="wrapper">
    <div class="row">
        <nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1 text-center">
            <div class="logo justify-center">
                <img src="{{ asset('img/logo.png') }}" width="180px">
            </div>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
            <ul class="nav nav-pills flex-column sidebar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><em class="fa fa-home"></em> Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><em class="fa fa-dashboard"></em> Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.conversations.index') }}"><em class="fa fa-envelope"></em> Messagerie</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.interface.index') }}"><em class="fa fa-desktop"></em> Interface</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.product.index') }}"><em class="fa fa-product-hunt"></em> Produits</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><em class="fa fa-shopping-cart"></em> Commandes</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><em class="fa fa-balance-scale"></em> Stocks</a></li>
            </ul>
        </nav>
        <main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
            <header class="page-header row justify-center">
                <div class="col-md-6 col-lg-8" >
                    <div class="float-left text-center text-md-left">@yield('title')</div>
                </div>
                <div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right">
                    <a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="username mt-1">
                            <h4 class="mb-1">{{ Auth::user()->name }}</h4>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-edit"></em> Mes informations</a>
                        <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            <em class="fa fa-power-off mr-1"></em> Se déconnecter
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
            </header>
            <div class="content">
                @yield('modal')
                @yield('content')
            </div>
        </main>
    </div>
</div>
@endsection