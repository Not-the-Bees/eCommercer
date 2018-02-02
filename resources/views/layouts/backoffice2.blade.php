<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!--Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/bo2.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid" id="wrapper">
    <div class="row">
        <nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">
            <div class="logo">
                <a href="{{ route('home') }}" class="simple-text">
                    <img src="{{ asset('img/logo.png') }}" width="180px">
                </a>
            </div>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
            <ul class="nav nav-pills flex-column sidebar-nav">
                <li class="nav-item"><a class="nav-link" href="index.html"><em class="fa fa-dashboard"></em> Dashboard</a></li>
                <li class="nav-item">
                    <div class="dropdown dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <em class="fa fa-desktop"></em> Interface
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="background-color: black;" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('slide.index') }}"><em class="fa fa-angle-double-left"></em> Gestion du slideshow</a>
                            <a class="dropdown-item" href="{{ route('content.index') }}"><em class="fa fa-quote-right"></em> Gestion du contenu</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item">
                    <div class="dropdown dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <em class="fa fa-product-hunt"></em> Porduits
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="background-color: black;" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('product.create') }}"><em class="fa fa-plus-circle"></em> Ajouter un produit</a>
                            <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Gestion des produits</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item"><a class="nav-link" href="charts.html"><em class="fa fa-user-circle"></em> Commandes</a></li>
                <li class="nav-item"><a class="nav-link" href="elements.html"><em class="fa fa-hand-o-up"></em> Stock</a></li>
            </ul>

            <a href="#" class="logout-button"><em class="fa fa-power-off"></em> Signout</a></nav>

        <main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
            <header class="page-header row justify-center">
                <div class="col-md-6 col-lg-8" >
                    <h1 class="float-left text-center text-md-left">Dashboard</h1>
                </div>

                <div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="username mt-1">
                            <h4 class="mb-1">Username</h4>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
                        <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
                        <a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> Logout</a>
                    </div>
                </div>

                <div class="clear"></div>
            </header>

            <div class="content">
                @yield('modal')
                @yield('content')
            </div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/chart.min.js') }}"></script>
<script src="{{ asset('js/chart-data.js') }}"></script>
<script src="{{ asset('js/easypiechart.js') }}"></script>
<script src="{{ asset('js/easypiechart-data.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('article-ckeditor');
            </script>
</body>
</html>
