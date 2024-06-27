<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $query = request('search');
        return view('produtos', ['query' => $query]);
    }

    public function test($id = null)
    {
        return view('produto', ['id' => $id]);
    }
}
