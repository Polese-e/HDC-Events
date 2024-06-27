<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = 'Matheus';
        $idade = '19';
        $trabalho = 'Programador';
        $arr = [1,2,3,4,5];
        $nomes = ['Sandra', 'Enzo', 'Gabriel', 'Igor'];

    return view('welcome', [
        'nome' => $nome,
        'idade2' => $idade,
        'trabalho' => $trabalho,
        'arr' => $arr,
        'nomes' => $nomes
    ]);
    }

    public function create()
    {
        return view('events.create');
    }
}
