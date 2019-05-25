@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>

                    <h3>Your Blog Posts</h3>
                    
                    @if(count($posts) > 0)
                        <table class="table table-stripperd">

                            <thead>
                                <tr>
                                    <th scope="col">Title</tr>
                                    <th scope="col"></th>
                                    <tr scope="col"></tr>
                                </tr>
                            </thead>

                            @foreach ($posts as $post)
                                <tbody>
                                    <tr>
                                        <td>{{$post->title}}</td>

                                        <td>
                                                <form method="GET" action="/posts/{{$post->id}}/edit" class="form-group">
                                                    @csrf
                                            
                                                    <button class="btn btn-default" type="submit">Edit Post</button>
                                                
                                                </form>
                                            
                                        </td>

                                        <td>
                                            
                                            <form method="POST" action="/posts/{{$post->id}}" class="form-group">
                                                @csrf
                                                @method("DELETE")
                                        
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
        
                            @endforeach

                        </table>
                    @else
                        
                        <h3>No Posts Found</h3>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
