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

                <form method="POST" action="/completed-task/{{$task->id}}">

                    @if($task->completed)

                         @method('DELETE')

                    @endif


                    @csrf

                    <label for="completed" class="checkbox {{$task->completed ? 'is-complete' : '' }}">
                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked' : '' }}>

                        {{$task->description}}
                    
                    </label>
                </form>

            @endforeach    

        </div>
    @endif

   
    <form method="POST" action="/projects/{{$project->id}}/tasks" class="form">
            
        @csrf
            
        <div class="form-group">
               
            <Label for="New Task">New Task </Label>

                <div class="field">
               
                    <input type="text" class="form-control" placeholder="New Task" name="description">
               
                </div>
 
        </div>

        <div class="field">

          <button class="btn btn-primary" type="submit">Add Task</button>

       </div>

        @include('errors')

     </form>

@endsection