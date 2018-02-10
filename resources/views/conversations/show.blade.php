@extends('layouts.backoffice')

@section('title')
    <nav class="breadcrumb">
        <span class="breadcrumb-item active">Messagerie</span>
    </nav>
@endsection

@section('content')
    @include('conversations.users', ['users' => $users, 'unread' => $unread])
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <p class="p-slide">{{ $user->name }}</p>
                </div>
                <div class="card-block">
                    @if($messages->hasMorePages())
                        <div class="text-center">
                            <a href="{{ $messages->nextPageUrl() }}" class="btn btn-light">Voir les messages précédents</a>
                        </div>
                    @endif
                    <div class="overflow-property" style="overflow-y: scroll; overflow-x: hidden; max-height: 500px;">
                        @foreach(array_reverse($messages->items()) as $message)
                            <div class="row">
                                <div class="col-md-10 {{ $message->from->id !== $user->id ? 'offset-md-2 text-right' : '' }}">
                                    <h4 class="card-title" style="margin-right: 1%;">
                                        {{ $message->from->id !== $user->id ? 'Moi' : $message->from->name }}
                                    </h4>
                                    <p class="card-text" style="margin-right: 1%;">
                                        {!! nl2br(e($message->content)) !!}
                                    </p>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                        @if($messages->previousPageUrl())
                            <div class="text-center">
                                <a href="{{ $messages->previousPageUrl() }}" class="btn btn-light">Voir les messages suivants</a>
                            </div>
                        @endif
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea name="content" placeholder="Quoi de neuf ? :)" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
@endsection

@section('inversescroll')
    <script type="text/javascript">
        window.onload = function() {
            Array.prototype.map.call(
                document.getElementsByClassName('overflow-property'),
                function(that) {
                    that.scrollTop = that.scrollHeight;
                }
            );
        };
    </script>
@endsection