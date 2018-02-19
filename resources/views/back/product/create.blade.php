@extends('back.layout')

@section('title')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ route('admin.product.index') }}">Produits</a>
        <span class="breadcrumb-item active">Fiche produit</span>
    </nav>
@endsection

@section ('content')
    <div class="row">
        @include('back.include.productnav')
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <p class="p-slide">Ajouter un produit</p>
                </div>
                <div class="card-block">
                    <form method="post" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Titre du produit</label>
                                    <input type="text" name="name" class="form-control" placeholder="Titre" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Prix du produit</label>
                                    <input type="number" name="price" class="form-control" placeholder="Prix" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quantité disponible</label>
                                    <input type="number" name="qte" class="form-control" placeholder="Quantité" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ajouter une image</label>
                                    <input class="btnAddProd" name="img" type="file" name="pic" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choisir une catégorie</label>
                                    <select name="category_id" class="form-control" id="inlineFormCustomSelect">
                                        <option selected>Catégorie</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description du produit</label>
                                    <textarea name="description" id="article-ckeditor" rows="5" class="form-control" placeholder="Caractéristiques techniques" value="">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Ajouter le produit</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
@endsection