@extends('layouts.index')

@section('title', 'Home')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/homepage/lionbunny.jpg')">
            <div class="carousel-caption d-none d-md-block font-shop">
                <h3>Une équipe dévouée</h3>
                <p>Pour vous accompagner durant vos achats.</p>
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/homepage/puppybunny.jpeg')">
            <div class="carousel-caption d-none d-md-block font-shop">
                <h3>Vêtements pour animaux</h3>
                <p>Et vos meilleurs amis à quatre pattes seront enfin au top de la mode.</p>
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/homepage/photogrid.jpg')">
            <div class="carousel-caption d-none d-md-block font-shop">
                <h3>Des produits plus conventionnels</h3>
                <p>Des trucs et des bidules à n'importe quel prixEn savoir plus.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<h2 class="text-center title-bg">Les meilleurs ventes</h2>
<div class="row">
    <div class="col-lg-3 col-sm-6 portfolio-item">
        <div class="card h-100 centered">
            <a href="#"><img class="card-img-top img-top-sales" src="img/products/hoodieflash.jpg" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Sweat Flash</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 portfolio-item">
        <div class="card h-100 centered">
            <a href="#"><img class="card-img-top img-top-sales" src="img/products/hoodiehulk.jpg" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Sweat à capuche Spiderman</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 portfolio-item">
        <div class="card h-100 centered">
            <a href="#"><img class="card-img-top img-top-sales" src="img/products/hoodiestarwars.jpg" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Sweat à capuche Star Wars</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 portfolio-item">
        <div class="card h-100 centered">
            <a href="#"><img class="card-img-top img-top-sales" src="img/products/hoodiespiderman.png" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Sweat Batman</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
    </div>
</div>
@endsection