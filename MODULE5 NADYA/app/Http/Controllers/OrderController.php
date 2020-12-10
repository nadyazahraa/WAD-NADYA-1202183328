<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function order()
    {
        $product = Product::all();
        return view('MODULE5 NADYA/order', ['product' => $product]);
    }

    public function create($id)
    {
        $product = Product::find($id);
        return redirect('MODULE5 NADYA/crud_order/insert', ['product' => $product]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
