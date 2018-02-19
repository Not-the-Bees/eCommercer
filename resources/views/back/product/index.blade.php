@extends('back.layout')

@section('title')
    <nav class="breadcrumb">
        <span class="breadcrumb-item active">Produits</span>
    </nav>
@endsection

@section('content')
    <div class="row">
        @include('back.include.productnav')
    </div>
@endsection