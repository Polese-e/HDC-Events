@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
<h1>Tela de Produtos</h1>
@if ($query != '')
    <p>O usuário está buscando por {{ $query }}</p>
@endif
<a href="/">Retornar ao Início</a>
<<<<<<< HEAD
@endsection 
=======
@endsection
>>>>>>> origin/main
