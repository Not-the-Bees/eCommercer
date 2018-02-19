@extends('back.layout')

@section('title')
    <nav class="breadcrumb">
        <span class="breadcrumb-item active">Messagerie</span>
    </nav>
@endsection

@section('content')
<div class="row">
    @include('back.conversations.users', ['users' => $users, 'unread' => $unread])
</div>
@endsection