@extends('layout/wad')

@section('title', 'HISTORY-modul4')

@section('container')
  <div class="container">

    @if ($product == null)
        <div class="row justify-content-center" align="center">
            <div class="col-10">
                <p class="text-muted">There is no data..</p>
                <a href="{{ url('home/product/insert') }}" class="btn btn-secondary">Add Product</a>
            </div>
        </div>
      @else

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

  </div>

@endif
@endsection