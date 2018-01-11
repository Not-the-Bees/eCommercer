@extends('layouts.index')

@section('title', 'Produits')

@section('content')
<div class="row">
    <div class="col-lg-3">
        <h1 class="my-4">eCommercer</h1>
        <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="row">
            @forelse($products as $product)
                <div class="col-lg-4 col-md-6 mb-4 product-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://lorempicsum.com/futurama/700/400/6" title="{{ $product->img }}"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="/product">{{ $product->name }}</a>
                            </h4>
                            <h5>{{ $product->price }} €</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <br>
                            <a href="{{ route('fiche.show') }}" class="btn btn-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-warning col-9" role="alert">Il n'y a aucun objet correspondent à votre recherche</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
