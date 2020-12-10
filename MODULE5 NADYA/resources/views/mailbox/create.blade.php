@extends('layout/main')

@section('title', 'Create!')

@section('container')

<div class="container mt-4">
    
    <h3 class="tulisan">Keep your story here</h3>

    <form class="mt-4" method="POST" action="{{ route('buat') }}">

        @csrf

        <div class="form-group">
            <label for="input_title">Title</label>
            <input type="text" class="form-control" id="input_title" name="title" placeholder="Put Your Title Here">
        </div>

        <label for="level">How was your day?</label>
        <input type="text" class="form-control mb-3 col-lg-5" id="level" name="level" placeholder="Scale 1-10">

        <div class="form-group">
            <label for="story">Description</label>
            <textarea class="form-control" id="story" rows="6" name="story" placeholder="Tell me about your day"></textarea>
        </div>

        <button class="btn btn-secondary" type="submit" value="submit">Submit</button>

    </form>

</div>

@endsection