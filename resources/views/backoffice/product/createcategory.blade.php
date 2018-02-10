@extends('layouts.backoffice')

@section('title')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ route('product.page') }}">Produits</a>
        <span class="breadcrumb-item active">Catégories</span>
    </nav>
@endsection

@section('content')
    <div class="row" style="margin-bottom: 50px;">
        <div class="col-md-1"></div>
        @include('backoffice.product.productnav')
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <p class="p-slide">Ajouter une catégorie</p>
                </div>
                <div class="card-block">
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
                            <button type="submit" class="btn btn-primary pull-right">Ajouter une catégorie</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-7 offset-md-4">
            <table class="table table-bordered table-inverse">
                <thead class="">
                <tr class="bg-primary">
                    <th>#</th>
                    <th>Catégories</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <form action="" method="">
                            <td>
                                <input type="text" class="form-control" value="{{ $category->name }}">
                            </td>
                            <td>
                                <button class="btn btn-primary" type="button">Editer</button>
                            </td>
                        </form>
                        <td>
                            <form action="" method="">
                                <button class="btn btn-danger" type="button">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection