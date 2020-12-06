@extends('layout/wad')

@section('title', 'INSERT-modul5')

@section('container')
<div class="container mt-4">
    
    <h1 class="text-center">Input Product</h1>

    <form class="mt-5" method="POST" action="{{ route('jembatan') }}" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name">
        </div>

        <label for="price">Price</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">$ USD</span>
            </div>
            <input type="text" class="form-control" aria-label="price" aria-describedby="basic-addon1" name="price">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="description"></textarea>
        </div>

        <label for="exampleFormControlTextarea1">Stock</label>
        <input type="text" class="form-control col-lg-5" name="stock">

        <div class="form-group mt-3">
            <label for="exampleFormControlFile1">Image file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_path">
        </div>

        <button class="btn btn-secondary" type="submit" value="submit">Submit</button>

    </form>

</div>
@endsection