@extends('layout/wad')

@section('title', 'ORDER-modul5')

@section('container')
<div class="container mt-5">

    @if($product->isEmpty())
        <div class="row justify-content-center" align="center">
            <div class="col-10">
                <p class="text-muted">There is no data..</p>
                <a href="{{ route('yuk') }}" class="btn btn-secondary">Add Product</a>
            </div>
        </div>
    @else

    <h3 class="text-center my-5">Order List</h3>

    <div class="row justify-content-center">
        @foreach ($product as $or)
        <div class="col">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="{{ asset( '/assets/covers'.$or->img_path) }}" class="card-img-top" alt="Picture not found">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $or->name }}</h5>
                        <p class="card-text text-center">{{ $or->description }}</p>
                        <h5 class="card-text text-center"> Price: ${{$or->price}}</h5>
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <a class="btn btn-secondary" href="{{ route('buat', $or->id) }}"> Order Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
            
        @endforeach
    </div>

</div>
@endif
@endsection