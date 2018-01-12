@extends('layouts.index')

@section('title', 'Home')

@section('content')
@if($slides->isNotEmpty())
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $i = 0; ?>
        @foreach($slides as $slide)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $slide->id }}" class="{{ $i == 0 ? 'active' : '' }}"></li>
            <?php $i++; ?>
        @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php $i = 0; ?>
        @foreach($slides as $slide)
            <div class="carousel-item {{ $i == 0 ? 'active' : '' }}" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('{{ asset('storage/' . $slide->img . '') }}'); background-size:cover; background-repeat:no-repeat;">
                <div class="carousel-caption d-none d-md-block font-slide">
                    <h3>{{ $slide->title }}</h3>
                    <p>{{ $slide->description }}</p>
                    <a href="{{ $slide->button_action }}" class="btn btn-primary">{{ $slide->button_title }}</a>
                </div>
            </div>
            <?php $i++; ?>
        @endforeach
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
@endif

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
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur assumenda atque blanditiis cum doloremque dolorum enim facere impedit ipsum magni molestiae omnis possimus qui quos reprehenderit, sit totam ullam?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit inventore quo repellendus vero! Aliquam at debitis facere magnam magni maxime molestiae nam non officia praesentium velit veritatis vero voluptate, voluptates.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid cupiditate hic laudantium nam numquam quia rem? Ea exercitationem id iure molestiae mollitia, necessitatibus pariatur quibusdam sint tempora tempore voluptates.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum est eum molestiae quas! Adipisci blanditiis eligendi esse facilis magni molestiae nam, omnis quis quos repellendus reprehenderit, similique veniam voluptatem.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor modi necessitatibus nisi reprehenderit. Animi asperiores commodi, debitis expedita hic in nihil officiis quisquam temporibus tenetur! Earum eum iure mollitia vero!
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolores enim est fuga maiores natus odio, porro provident quae quisquam similique tenetur ut voluptatum! Animi consequuntur id quibusdam repudiandae veniam!</p>


<div class="carousel-item active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('img/homepage/idees-cadeaux.png'); background-size:cover; background-repeat:no-repeat; margin-bottom: 15px">
    <div class="carousel-caption font-slide">
        <h3>Plein d'idées cadeaux</h3>
        <p>Pour les gens sans inspiration !</p>
        <a href="#" class="btn btn-primary">Voir les idées cadeaux</a>
    </div>
</div>
@endsection