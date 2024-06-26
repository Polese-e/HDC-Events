<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'Matheus';
    $idade = '19';
    $trabalho = 'Programador';
    $arr = [1,2,3,4,5];
    $nomes = ['Sandra', 'Enzo', 'Gabriel', 'Igor'];

    return view('welcome', ['nome' => $nome, 'idade2' => $idade, 'trabalho' => $trabalho, 'arr' => $arr, 'nomes' => $nomes]);
});

Route::get('/contatos', function () {
    return view('contatos');
});

Route::get('/produtos', function() {
    $query = request('search');
    return view('produtos', ['query' => $query]);
});

Route::get('/produto_teste/{id?}', function($id = null) {
    return view('produto', ['id' => $id]);
});
