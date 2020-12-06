@extends('layout/main')

@section('title', 'PRODUCT-Milky')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-5">Daftar Product</h1>

      <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Rasa</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $product as $pd )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <th>{{ $pd->nama }}</th>
                <th>{{ $pd->rasa }}</th>
                <th>{{ $pd->ukuran }}</th>
                <th>{{ $pd->jumlah }}</th>
                <th>
                    <a href="" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-danger">Delete</a>
                </th>
            </tr>
            @endforeach    
        </tbody>

      </table>
    </div>
  </div>
</div>
@endsection
