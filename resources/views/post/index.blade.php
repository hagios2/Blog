@extends('layout')

@section('content')

    <h1>Post</h1>


    @if(count($posts) > 0)
             
        @foreach($posts as $post)

      
            <div class="lead container">

                <h3 class="display-6"><a href="posts/{{$post->id}}"> {{$post->title}} </a> </h3>

                <small class="lead">written on {{$post->created_at}}</small>
  
            </div>

        @endforeach

        {{$post->links}}

        
    @else
            
        <p> No Posts found </p>
  
    @endif

    <a href="posts/create" class="btn btn-primary">Add Post</a>
        
@endsection
