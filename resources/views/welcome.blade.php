@extends('layouts.main')

@section('title', 'Início')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Buscar um evento</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>
    <div id="events-container" class="col-10 mx-auto">
        <div id="title-events" class="m-2">
        @if ($search)
            <h2>Procurando por: {{ $search }}</h2>
        @else
            <h2 class="mb-2"><strong>Lançamentos</strong></h2>
        @endif
        </div>
        <div id="cards-container" class="row mx-auto">
            @foreach ($events as $event)
                <div class="card col-md-3 m-2 p-0 py-1">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">{{ count($event->users) }} participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
        @if (count($events) == 0 && $search)
            <p>Não há eventos como o nome de: {{ $search }} | <a href="/">Voltar ao início</a></p>
        @elseif (count($events) == 0)
            <p>Não há eventos disponíveis</p>
        @endif
    </div>

@endsection
