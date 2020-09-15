@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Notificaciones</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>No leídas</h2>
                <ul class="list-group">
                    @foreach($unreadNotifications as $unreadNotification)
                        <li class="list-group-item">
                            <a href="{{ $unreadNotification->data['link'] }}">
                                {{ $unreadNotification->data['text'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-6">
                <h2>Leídas</h2>
                <ul class="list-group">
                    @foreach($readNotifications as $readNotification)
                        <li class="list-group-item">
                            <a href="{{ $readNotification->data['link'] }}">
                                {{ $readNotification->data['text'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection