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
            <a href="#"><img class="card-img-top img-top-sales" src="img/products/hoodiespiderman.png" alt=""></a>
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
@endsection