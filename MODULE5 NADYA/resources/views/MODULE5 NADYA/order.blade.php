@extends('layout/wad')

@section('title', 'ORDER-modul5')

@section('container')
<div class="container mt-5">

    <div class="row justify-content-center" align="center">
        <div class="col-10">
            <p class="text-muted">There is no data..</p>
            <a href="{{ route('order.index') }}" class="btn btn-secondary">Add Product</a>
        </div>
    </div>

</div>

@endsection