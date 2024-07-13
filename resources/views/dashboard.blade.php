@extends('layouts.main')

@section('title', 'Meus Eventos')

@section('content')
@if (count($events) > 0)
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table">
        <thead>
            <th>#</th>
            <th>Nome</th>
            <th>Participantes</th>
            <th>Ações</th>
        </thead>
        @foreach ($events as $event)
            <tbody>
                <td>{{ $loop->index + 1 }}</td>
                <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                <td>0</td>
                <td>
                    <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                    <form action="/events/{{ $event->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                    </form>
                </td>
            </tbody>
        @endforeach
    </table>
</div>
@else
    <p>Você não tem eventos | <a href="/events/create">CRIAR EVENTO.</a></p>
@endif
@endsection
