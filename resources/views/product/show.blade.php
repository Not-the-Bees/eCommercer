@extends('layouts.index')

@section('title', $title)

@section('content')
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="font-ecommercer">{{ $product->name }}</h2>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active" style="background-image: url('http://lorempicsum.com/futurama/700/400/1')">
                            </div>
                            <div class="carousel-item" style="background-image: url('http://lorempicsum.com/futurama/700/400/2')">
                            </div>
                            <div class="carousel-item" style="background-image: url('http://lorempicsum.com/futurama/700/400/3')">
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
                </div>
                <div class="col-sm-7">
                    <p class="text-gray alt-font">Catégorie : <a id="hover" class="font-shop" href="#">{{ $product->category->name }}</a></p>

                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star-half-o text-warning"></i>
                    <span><a id="hover" class="font-shop" href="#">(12 avis)</a></span>
                    <h4 class="font-shop">Prix : {{ $product->price }} €</h4>
                    <p>{{ $product->description }}</p>
                    <hr class="spacer-10">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <select class="form-control" name="select">
                                <option value="" selected="">Couleur</option>
                                <option value="red">Rouge</option>
                                <option value="green">Vert</option>
                                <option value="blue">Bleu</option>
                            </select>
                        </div><!-- end col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <select class="form-control" name="select">
                                <option value="">Taille</option>
                                <option value="">S</option>
                                <option value="">M</option>
                                <option value="">L</option>
                                <option value="">XL</option>
                                <option value="">XXL</option>
                            </select>
                        </div><!-- end col -->
                        <div class="col-md-4 col-sm-12">
                            <input class="form-control" type="number" name="quantity" id="quantity" value="{{ $product->qte }}" min="0">
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <hr class="spacer-10">
                    <button type="button" class="btn btn-primary btn-md round btn-shop"><i class="fa fa-shopping-basket mr-1"></i>Ajouter au panier</button>
                    <button type="button" class="btn btn-primary btn-md round btn-shop"><i class="fa fa-heart mr-1"></i>Ajouter à mes favoris</button>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end modal-body -->
    </div><!-- end modal-content -->
</div>
@endsection