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
        <div class="carousel-item active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('img/homepage/lionbunny.jpg'); background-size:cover; background-repeat:no-repeat;">
            <div class="carousel-caption font-slide">
                <h3>Une équipe dévouée</h3>
                <p>Pour vous accompagner durant vos achats.</p>
                <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('img/homepage/puppybunny.jpeg'); background-size:cover; background-repeat:no-repeat;">
            <div class="carousel-caption font-slide">
                <h3>Vêtements pour animaux</h3>
                <p>Et vos meilleurs amis à quatre pattes seront enfin au top de la mode.</p>
                <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('img/homepage/photogrid.jpg'); background-size:cover; background-repeat:no-repeat">
            <div class="carousel-caption font-slide">
                <h3>Des produits plus conventionnels</h3>
                <p>Des trucs et des bidules à n'importe quel prix.</p>
                <a href="#" class="btn btn-primary">En savoir plus</a>
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
                <h5>159.00€</h5>
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
                    <a href="#">Sweat à capuche Hulk</a>
                </h4>
                <h5>59.00€</h5>
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
                <h5>99.00€</h5>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 portfolio-item">
        <div class="card h-100 centered">
            <a href="#"><img class="card-img-top img-top-sales" src="img/products/hoodiespiderman.png"></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Sweat Spiderman</a>
                </h4>
                <h5>119.00€</h5>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
    </div>
</div>

<h2 class="text-center title-bg">Pour être mieux référencé</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, dignissimos dolor esse est eveniet illum iste labore libero maiores pariatur perspiciatis qui temporibus tenetur vel vero. Aliquid dolor neque perspiciatis!
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis consequatur dolorem doloremque ducimus earum eum, ipsum labore laborum molestiae nesciunt, numquam officiis praesentium recusandae rem sint tenetur veritatis voluptates!
Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores ea eveniet illo maiores nisi repudiandae? Accusamus autem dolorem fugit in incidunt, laborum nam nisi nostrum odio recusandae! Pariatur, voluptas.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusantium alias animi consequuntur dignissimos eligendi enim eveniet iusto magnam necessitatibus nulla obcaecati pariatur provident quaerat, quia quos tempore veniam, veritatis?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi nostrum odit quaerat saepe! Amet ea saepe temporibus. Ea error fugit incidunt odit quisquam. Autem cupiditate eius exercitationem libero
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam eaque eveniet fugiat libero quam qui saepe. Amet autem beatae dignissimos eveniet illum iste magnam pariatur reiciendis. Est officiis, rem! Tempora.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem commodi delectus, doloremque doloribus ducimus, earum, eligendi est et eveniet expedita id nam optio perspiciatis quia veritatis voluptas voluptates?</p>


<div class="carousel-item active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('img/homepage/idees-cadeaux.png'); background-size:cover; background-repeat:no-repeat; margin-bottom: 15px">
    <div class="carousel-caption font-slide">
        <h3>Plein d'idées cadeaux</h3>
        <p>Pour les gens sans inspiration !</p>
        <a href="#" class="btn btn-primary">Voir les idées cadeaux</a>
    </div>
</div>
@endsection