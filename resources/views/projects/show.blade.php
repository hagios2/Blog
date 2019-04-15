@extends('layout')

@section('title', 'Display')

@section('content')

    <h1 class="title">{{$project->title}}</h1>

    <div class="content">
        {{$project->description}}

        <p>
            <a href="/projects/{{$project->id}}/edit">Edit project</a>
        </p>
       
    </div> 

    @if ($project->tasks->count())

        <div class="content">       
        
            @foreach($project->tasks as $task)

                <form action="">
            
                    <input type="checkbox" name="completed">

                    {{$task->description}}
                
                </form>

            @endforeach    

            
        </div>
    @endif

@endsection