<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    // Display a listing of the resource.
    public function index()
    {
        $product = Product::all();
        return view('MODULE5 NADYA/crud_product/output', ['product' => $product]);
    }


    public function input() 
    {
        return view('MODULE5 NADYA/crud_product/insert');
    }

 
    // Show the form for creating a new resource.
    public function create(Request $request)
    {
        return redirect('MODULE5 NADYA/crud_product/insert'); 
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'img_path' => 'required'
         ]);
     
         if($request->hasFile('img_path')){
            $file = $request->file('img_path');
            $imageName = time()."_".$file->getClientOriginalName();
    
            $request->img_path->move(public_path('assets/covers'), $imageName);

            Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'img_path' =>$imageName,

         ]);

        }
            return redirect()->route('terserah');
    }


    // Show the form for editing the specified resource.
    public function edit(Product $product, $id)
    {
        $product = Product::findOrFail($id);
        return view('MODULE5 NADYA/crud_product/update', compact('product'));
    }


    // Update the specified resource in storage.
    public function update(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'img_path' => 'required'
        ]);
        
        $file = $request->file('img_path');
        $gambar = time()."_".$file->getClientOriginalName();

        $request->img_path->move(public_path('img'), $gambar);

        $update = Product::find($id);

        $update->name = $request->name;
        $update->price = $request->price;
        $update->description = $request->description;
        $update->stock = $request->stock;
        $update->img_path = $cover;

        $update->save();

        return redirect('MODULE5 NADYA/crud_product/output');
    }


    // Remove the specified resource from storage.
    public function destroy(Product $product) 
    {
        $product->delete();
        return redirect()->route('terserah');
    }
}
