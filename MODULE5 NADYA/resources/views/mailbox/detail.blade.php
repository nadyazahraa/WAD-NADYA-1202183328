@extends('layout/main')

@section('title', 'Detail!')

@section('container')

    <div class="container">

        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $story->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $story->level }}</h6>
                <p class="card-text">{{ $story->story }}</p>

                <a href="{{ route('edit', [$story->id]) }}" class="btn btn-primary">EDIT</a>

                <form action="{{ $story->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit" value="delete">DELETE</button>
                </form>
                
            </div>
        </div>   

    </div>

@endsection