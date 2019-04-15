@extends('layout')

@section('title', 'Projects')


@section('content')
    
    <h1 class="title">Projects</h1>

    <ul class="list-group">
        @foreach($projects as $project)
          
            <li class="list-group-item">
                <a href="/projects/{{$project->id}}">
                    {{$project->title}}
                </a>
            </li>
                
        @endforeach
    </ul><br>


    <a class="btn btn-primary" href="/projects/create">Add a project</a>

@endsection
