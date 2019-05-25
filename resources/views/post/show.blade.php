@extends('layout')

@section('content')

    
    <a href="/posts" class="btn btn-default">Back</a>

    <h1>{{$post->title}}</h1>

    <div class="container">

        <h4>{!!$post->body!!}</h4>

    </div>

    <hr>
    <small> {{$post->created_at}}</small>

    <form method="GET" action="/posts/{{$post->id}}/edit" class="form-group">
        @csrf

        <button class="btn btn-primary" type="submit">Edit Post</button>
    
    </form>



    <form method="POST" action="/posts/{{$post->id}}" class="form-group">
        @csrf
        @method("DELETE")

        <button class="btn btn-primary" type="submit">Delete</button>
    
    </form>

@endsection
