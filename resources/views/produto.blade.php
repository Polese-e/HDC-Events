@extends('layouts.main')

@section('title', 'Produto')

@section('content')
<h1>Produto</h1>
@if ($id)
    <p>Produto de ID {{ $id }}</p>
@endif
<a href="/produtos">Retornar a Tela de Produtos</a>
@endsection
