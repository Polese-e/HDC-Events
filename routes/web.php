<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatos', function () {
    return view('contatos');
});

Route::get('/produtos', function() {
    return view('produtos');
});
