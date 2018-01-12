@extends('layouts.backoffice')

@section('title', 'Backoffice - Slider')

@section ('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Ajouter un produit</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
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

                            <button type="submit" class="btn btn-back pull-right">Ajouter le produit</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="header">
                        <h4 class="title">Ajouter une catégorie</h4>
                    </div>
                    <div class="content">
                        <form action="{{ route('category.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nom de la catégorie</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nom" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <button type="submit" class="btn btn-back pull-right">Ajouter une catégorie</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection