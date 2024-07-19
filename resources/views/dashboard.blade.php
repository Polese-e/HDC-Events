@extends('layouts.main')

@section('title', 'Meus Eventos')

@section('content')
<div class="col-md-10 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
@if (count($events) > 0)
<div class="col-md-12 dashboard-events-container">
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
                <td>{{ count($event->users) }}</td>
                <td>
                    <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                    <form action="/events/{{ $event->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Delete</button>
                    </form>
                </td>
            </tbody>
        @endforeach
    </table>
</div>
@else
    <p>Você não tem eventos | <a href="/events/create">CRIAR EVENTO.</a></p>
@endif
<div class="col-md-10  dashboard-title-container">
    <h1>Eventos Que Estou Participando</h1>
</div>
@if (count($eventsasparticipant) > 0)
<div class="col-md-12 dashboard-events-container">
    <table class="table">
        <thead>
            <th>#</th>
            <th>Nome</th>
            <th>Participantes</th>
            <th>Ações</th>
        </thead>
        @foreach ($eventsasparticipant as $event)
            <tbody>
                <td>{{ $loop->index + 1 }}</td>
                <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                <td>{{ count($event->users) }}</td>
                <td>
                    <form action="/events/leave/{{ $event->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Sair do evento</button>
                    </form>
                </td>
            </tbody>
        @endforeach
    </table>
</div>
@else
    <p>Você não está participando de nenhum evento. | <a href="/">VER TODOS OS EVENTOS.</a></p>
@endif
@endsection
