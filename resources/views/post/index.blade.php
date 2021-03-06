@extends('layout')

@section('content')

    <h1>Post</h1>


    @if(count($posts) > 0)
             
        @foreach($posts as $post)

            <div class="lead container">

                <div class="row">

                    <div class="col-md-3 col-sm-3">

                        @if ($post->image_name !== 'noimage.jpg')
                           
                            <img style="width:100%" src="/storage/images/{{$post->user->name}}/{{$post->image_name}}" alt="{{$post->id}}">

                        @else
                       
                            <img style="width:100%" src="/storage/images/noimage.jpg" alt="{{$post->id}}">
                        
                         @endif
                
                    </div>
            
            
                    <div class="col-md-8 col-sm-8">
                                
                        <h3 class="display-6"><a href="posts/{{$post->id}}"> {{$post->title}} </a> </h3>
                
                        <small class="lead">written on {{$post->created_at}} by {{$post->user->name}}</small>
                  
                    </div>

                </div>
            
            </div>

        @endforeach

        {{$posts->links()}}

        
    @else
            
        <p> No Posts found </p>
  
    @endif

    @if(!auth()->guest())
        <a href="posts/create" class="btn btn-primary">Add Post</a>
    @endif
        
@endsection
