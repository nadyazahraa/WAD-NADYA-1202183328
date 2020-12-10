@extends('layout/main')

@section('title', 'Edit!')

@section('container')

<div class="container mt-4">
    
    <h3 class="tulisan">Edit your story here</h3>

    <form class="mt-4" method="POST" action="{{ route('update', [$story->id]) }}">
    
        @csrf

        <input type="hidden" name="id" value="{{ $story->id }}">
        <div class="form-group">
            <label for="input_title">Title</label>
            <input type="text" class="form-control" id="input_title" name="title" value="{{ $story->title }}">
        </div>

        <label for="level">How was your day?</label>
        <input type="text" class="form-control mb-3 col-lg-5" id="level" name="level" placeholder="Scale 1-10" value="{{ $story->level }}">

        <div class="form-group">
            <label for="story">Description</label>
            <textarea class="form-control" id="story" rows="6" name="story">{{ $story->title }}</textarea>
        </div>

        <button class="btn btn-secondary" type="submit" value="submit">Submit</button>

    </form>

</div>

@endsection