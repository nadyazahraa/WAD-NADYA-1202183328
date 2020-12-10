@extends('layout/main')

@section('title', 'Welcome!')

@section('container')

    <div class="container">
        <div class="card">
            <ul class="list-group list-group-flush">
            @foreach ( $story as $data )
                <li class="list-group-item">
                    <div class="row col-md-12">
                        <div class="col-md-6">{{ $data->title }}</div>
                        <div class="col-md-6 d-flex flex-row-reverse">
                        <a href="{{ route('tampil', [$data->id]) }}">DETAIL</a>
                    </div>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
    </div>

@endsection