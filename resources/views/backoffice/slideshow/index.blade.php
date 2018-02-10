@extends('layouts.backoffice')

@section('title')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ route('interface.index') }}">Interface</a>
        <span class="breadcrumb-item active">Slideshow</span>
    </nav>
@endsection

@section ('content')
    <div class="row">
        <div class="col-md-1"></div>
        @include('backoffice.interface.internav')
        <div class="col-md-1"></div>
        @foreach($slides as $slide)
            <div class="col-md-7">
                <div class="container">
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-md-12">
                            <div class="card-header">
                                <p class="p-slide">Slide</p>
                                <div class="dropdown card-title-btn-container">
                                    <button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><em class="fa fa-edit"></em> Modifier la slide</a>
                                        <a class="dropdown-item" href="#"><em class="fa fa-times"></em> Supprimer la slide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-inverse" style="color: white; background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('storage/' . $slide->img . '') }}'); background-position: center center;">
                                <div class="card-block text-center">
                                    <h3 class="card-title">{{ $slide->title }}</h3>
                                    <p class="card-text">{{ $slide->description }}</p>
                                    <button type="button" class="btn btn-primary" data-toggle="popover" title="Lien du bouton" data-content="{{ $slide->button_action }}">{{ $slide->button_title }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        @endforeach
    </div>
@endsection

@section('modal')
    <div class="row">
        <div class="col-md-7 offset-md-4">
            <div class="text-center">
                <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Ajouter un slide</button>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('slide.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Titre</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ajouter une image</label>
                                    <input class="btnAddProd" name="img" type="file" name="pic" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description du produit</label>
                                    <textarea name="description" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Titre du boutton</label>
                                    <input type="text" name="button_title" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Lien du boutton</label>
                                    <input type="text" name="button_action" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Ajouter le slide</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
