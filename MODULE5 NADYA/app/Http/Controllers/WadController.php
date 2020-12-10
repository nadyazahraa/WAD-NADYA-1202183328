<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WadController extends Controller
{
    public function home() 
    {
        return view('MODULE5 NADYA/home');
    }

    public function product() 
    {
        return view('MODULE5 NADYA/product');
    }

    public function history() 
    {
        return view('MODULE5 NADYA/history');
    }
}
