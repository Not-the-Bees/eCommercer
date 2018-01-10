@extends('layouts.index')

@section('title', 'Produits')

@section('content')
    <div class="row">
        @foreach($products as $product)
        <div class="col-lg-4 col-sm-6 product-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://lorempicsum.com/futurama/700/400/6" title="{{ $product->img }}"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">{{ $product->name }}</a>
                    </h4>
                    <p class="card-text">{{ $product->description }}</p>
                </div>
                <div class="card-footer">
                    <a href="/product/1" class="btn btn-primary">Voir le produit</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection