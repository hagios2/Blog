@extends('layout')

@section('content')

    
    <a href="/posts" class="btn btn-default">Back</a>

  

    <div class="jumbotron">

        <h1>{{$post->title}}</h1>

        <div style="width:70%">
            <img style="width:100%" src="/storage/images/{{$post->user->name}}/{{$post->image_name}}" alt="{{$post->id}}">
        </div>

        <h4>{!!$post->body!!}</h4>

        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

    </div>

    @if(!auth()->guest())

        <form method="GET" action="/posts/{{$post->id}}/edit" class="form-group">
            @csrf

            <button class="btn btn-primary" type="submit">Edit Post</button>
        
        </form>


        <form method="POST" action="/posts/{{$post->id}}" class="form-group">
            @csrf
            @method("DELETE")

            <button class="btn btn-danger" type="submit">Delete</button>
        
        </form>
    @endif

@endsection
