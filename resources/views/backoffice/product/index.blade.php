@extends('layouts.backoffice')

@section('title')
    <nav class="breadcrumb">
        <span class="breadcrumb-item active">Produits</span>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-1"></div>
        @include('backoffice.product.productnav')
        <div class="col-md-1"></div>
    </div>
@endsection