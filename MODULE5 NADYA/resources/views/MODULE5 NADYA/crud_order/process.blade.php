@extends('layout/wad')

@section('title', 'PROCESS-modul5')

@section('container')
<div class="container mt-5">

    @foreach ($order as $or)
    <div class="card" style="width: 18rem; float: left;margin: 120px">
        <img src="{{ asset('storage/assets/'.$product->img_path) }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $or->name }}</h5>
                <p class="card-text text-center">{{ $or->description }}</p>
                <h5 class="card-text text-center"> Price: ${{$or->price}}</h5>
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <a class="btn btn-secondary" href="{{ route('order.create') }}"> Order Now </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endforeach

</div>

@endsection