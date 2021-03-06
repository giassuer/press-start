@extends('layouts.dashboard')

@section('content')
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection