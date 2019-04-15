@extends('layout')

@section('title', 'Edit Project')

@section('content')

<h1 class="title">Edit Project</h1>

    <form action="/projects/{{$project->id}}" method="post">
      @method('PATCH')
      @csrf

         <div class="form-group">
            <label for="formGroupTitleInput">Title</label>
            <input class="form-control" type="text" name="title" required placeholder="title" value='{{$project->title}}'>
         </div>

         <div class="form-group">
            <label for="formGroupDescriptionInput">Description</label>
            <textarea class="form-control" name="description" required cols="30" rows="10" placeholder="description">{{$project->description}}</textarea>
         </div>

         <div class="form-group">
            <button class="btn btn-primary" type="submit">Update Project</button>
         </div>
    
    </form>
   
   <form action="/projects/{{$project->id}}" method="POST">
      @method('DELETE')
      @csrf
      <div class="form-group" ></div>
      <button class="btn btn-primary" type="submit">Delete Project</button>
   </form>


@endsection