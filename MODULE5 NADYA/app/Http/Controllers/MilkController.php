<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MilkController extends Controller
{
    public function home() 
    {
        return view('Milk/home');
    }

    public function about()
    {
        $nama = 'Nadya Zahra';
        return view('Milk/about', ['nama' => $nama]);
    }
}
