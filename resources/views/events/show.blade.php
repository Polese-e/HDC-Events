@extends('layouts.main')

@section('title', $event->title)

@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="image-fluid img-responsive" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
                <p class="events-participants"><ion-icon name="people-outline"></ion-icon>{{ count($event->users) }}
                    participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>{{ $eventOwner['name'] }}</p>
                @if (!$hasUserJoined)
                    <form action="/events/join/{{ $event->id }}" method="POST" id="event-submit">
                        @csrf
                        <button class="btn btn-primary"
                            onclick="event.preventDefault();
                        document.getElementById('event-submit').submit();">
                            Confirmar Presença
                        </button>
                    </form>
                @else
                    <p class="already-joined-msg">Você está participando deste evento!</p>
                @endif
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach ($event->items as $item)
                        <li><ion-icon name="play-outline"></ion-icon><span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o Evento:</h3>
                <p class="event-description">{{ $event->description }}</p>
            </div>
        </div>
    </div>
@endsection
