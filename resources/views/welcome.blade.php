@extends('layouts.main')

@section('title', 'Início')

@section('content')
@if (10 > 15)
<p>a condição e verdadeira</p>
@endif
@if ($nome == 'Pedro')
    <p>O nome é Pedro</p>
@elseif($nome == 'Matheus')
    <p>O nome é {{ $nome }}, tem {{ $idade2 }} anos e trabalha como {{ $trabalho }}.</p>
@else
    <p>O nome não é pedro</p>
@endif
<p>===========================</p>
@for($i = 0; $i < count($arr); $i++)
    <p>Posição: {{ $i }} - Valor: {{ $arr[$i]}}</p>
@if ($i == 2)
    <p>O contador chegou a 3!</p>
@endif
@endfor
<p>===========================</p>
@foreach ($nomes as $nome)
    <p>Posição: {{ $loop->index }} - Valor: {{ $nome }}</p>
@endforeach
<p>===========================</p>
@php
    $name = "joão";
    echo $name;
@endphp
@endsection
