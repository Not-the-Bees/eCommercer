@extends('layouts.backoffice')

@section('title', 'Backoffice - Slideshow')

@section('modal')
<label for="modal1" class="btn btn-back">Ajouter un slide</label>
<div class="modal-container">
    <input type="checkbox" class="modal-checkbox fadeInDown" id="modal1">
    <label for="modal1" class="modal-overlay"></label>
    <div class="modal-content">
        <label for="modal1" class="modal-close">&times;</label>
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Ajouter un slide</h4>
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
                <button type="submit" class="btn btn-back pull-right">Ajouter le slide</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection

@section ('content')
@foreach($slides as $slide)
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="color: white; background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('storage/' . $slide->img . '') }}'); background-position: center center;">
                <h3 class="widget-user-username">{{ $slide->title }}</h3>
                <a href=""><p class="widget-user-desc">Modifier le slide</p></a>
                <a href=""><p class="widget-user-desc">Supprimer la slide</p></a>
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">Description de la slide</h5>
                            <p class="description-header">{{ $slide->description }}</p>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">Boutton</h5>
                            <p class="description-header">{{ $slide->button_title }}</p>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">Lien sur boutton</h5>
                            <p class="description-header">{{ $slide->button_action }}</p>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->
    </div>
    <div class="col-md-1"></div>
</div>
@endforeach
@endsection
