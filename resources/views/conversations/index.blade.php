@extends('layouts.backoffice')

@section('title')
    <nav class="breadcrumb">
        <span class="breadcrumb-item active">Messagerie</span>
    </nav>
    @endsection

@section('content')
    @include('conversations.users', ['users' => $users, 'unread' => $unread])
    </div>
@endsection