@extends('layout/wad')

@section('title', 'OUTPUT-modul5')

@section('container')
<div class="container">
  <h1 class="mt-5 text-center">List Product</h1>

    <a href="{{ route('yuk') }}" class="btn btn-secondary my-3">Add Product</a>

      <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $product as $p )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <th>{{ $p->name }}</th>
                <th>${{ $p->price }}</th>
                <th>
                    <a href="{{ route('edit', [$p->id]) }}" class="btn btn-primary">Edit</a>

                    <form action="{{ $p->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger" type="submit" value="delete">Delete</button>
                    </form>
                </th> 
            </tr>
            @endforeach    
        </tbody>

      </table>
</div>
@endsection