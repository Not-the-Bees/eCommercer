@extends('layouts.backoffice')

@section('title')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Interface</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-1"></div>
        @include('backoffice.interface.internav')
        <div class="col-md-1"></div>
    </div>
@endsection