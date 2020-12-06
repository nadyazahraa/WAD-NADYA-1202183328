<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class barangController extends Controller
{
    public function index() 
    {
        $value = Barang::all();
        return view('output', ['barang' => $value]);
    }

    public function tambah() 
    {
        return view('input');
    }

    public function tambahBarang(Request $request)
    {
     $this->validate($request,[
        'product_name' => 'required',
        'product_price' => 'required',
        'product_quantity' => 'required',
        'product_category' => 'required',
        'product_description' => 'required'
     ]);
 
        Barang::create([
        'product_name' => $request->product_name,
        'product_price' => $request->product_price,
        'product_quantity' => $request->product_quantity,
        'product_category' => $request->product_category,
        'product_description' => $request->product_description,
        'gambar' => ''
     ]);
 
     return redirect('/barang');   
    }

    public function edit($id)
    {
        $edit = Barang::find($id);
        return view('update', ['product_code' => $edit]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'product_name' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required',
            'product_category' => 'required',
            'product_description' => 'required'
        ]);
        
        $update = Barang::find($id);
        $update->product_name = $request->product_name;
        $update->product_price = $request->product_price;
        $update->product_quantity = $request->product_quantity;
        $update->product_category = $request->product_category;
        $update->product_description = $request->product_description;
        $update->save();
        return redirect('/barang');
    }

    public function delete($delId)
    {
        $delete = Barang::find($delId);
        $delete->delete();
        return redirect('/barang');
    }
}

