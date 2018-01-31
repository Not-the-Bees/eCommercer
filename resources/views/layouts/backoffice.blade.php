<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/backoffice.css') }}">
        <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar" data-color="blue" data-image="{{ asset('img/sidebar-5.jpg') }}">
                <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="{{ route('home') }}" class="simple-text">
                            <img src="{{ asset('img/logo.png') }}" width="180px">
                        </a>
                    </div>

                    <ul class="nav">
                        <li>
                            <a class="nav-link" href="dashboard.html">
                                <i class="fa fa-tachometer" aria-hidden="true"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                                <button class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                    <p>Interface</p>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            <ul class="collapse" id="collapseExample">
                                <li class="secLink">
                                    <a href="{{ route('slide.index') }}">Gestion du slideshow</a>
                                </li>
                                <li class="secLink">
                                    <a href="{{ route('content.index') }}">Gestion du contenu</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="user.html">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                <p>User Profile</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <p>Products</p>
                            </a>
                            <ul class="nav sidenav-second-level collapse" id="collapseComponents">
                                <li class="secLink">
                                    <a  href="{{ route('product.create') }}">Ajouter un produit</a>
                                </li>
                                <li class="secLink">
                                    <a href="#">Gestion des produits</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="table.html">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <p>Table List</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">User</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="">
                                        <p>Account</p>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <p>
                                            Dropdown
                                            <b class="caret"></b>
                                        </p>

                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <p>Log out</p>
                                    </a>
                                </li>
                                <li class="separator hidden-lg hidden-md"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="content">
                    @yield('modal')
                    @yield('content')
                </div>
            </div>
        </div>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/classie.js') }}"></script>
        <script src="{{ asset('js/modalEffects.js') }}"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('article-ckeditor');
        </script>
    </body>

</html>