@extends('layouts.main')

@section('title', 'Início')

@section('content')

<h1>Eventos:</h1>
@foreach ($events as $event)
    <p>{{ $event->title }} - {{ $event->description }}</p>
@endforeach

@endsection
