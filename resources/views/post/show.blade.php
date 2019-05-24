@extends('layout')

@section('content')

    
    <a href="/posts" class="btn btn-default">Back</a>

    <h1>{{$post->title}}</h1>

    <div class="container">

        <h4>{{$post->body}}</h4>
    </div>

    <hr>
    <small> {{$post->created_at}}</small>

@endsection
