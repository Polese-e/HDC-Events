<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'Matheus';
    $idade = '19';
    $trabalho = 'Programador';

    return view('welcome', ['nome' => $nome, 'idade2' => $idade, 'trabalho' => $trabalho]);
});

Route::get('/contatos', function () {
    return view('contatos');
});

Route::get('/produtos', function() {
    return view('produtos');
});
