@extends('layout')

@section('title', 'Add Project')

@section('content')

    <h1 class="title">Create New Project</h1>

    <form method="POST" action="/projects">
    @csrf
        
        <div class="form-group">
            <label for="formGroupTitleInput">Title</label>
            <input class="form-control" type="text" name="title" value="{{old('title')}}" placeholder="title">
        </div>

        <div class="form-group">
            <label for="formGroupDescriptionInput">Description</label>
            <textarea class="form-control" name="description" cols="30" rows="10" placeholder="description">{{old('description')}}</textarea>
        </div>

        <div class="form-group">
          <button class="btn btn-primary" type="submit">Add Project</button>
        </div>

        @if($errors->any())

            <div class="field">

                <ul class="list-group">
                    @foreach($errors->all() as $error)
                    
                        <li class="list-group-item">
                            {{$error}}
                        </li>
                    
                    @endforeach

                </ul>
            </div>
        
            @endif
    
        </form>

@endsection