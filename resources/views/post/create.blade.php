@extends('layout')

@section('title', 'Add Post')

@section('content')

    <h1 class="title">Add New Post</h1>

    <form method="POST" action="/posts">
    @csrf
        
        <div class="form-group">
            <label for="formGroupTitleInput">Title</label>
            <input class="form-control" type="text" name="title" required value="{{old('title')}}" placeholder="title">
        </div>

        <div class="form-group>
            <label for="formGroupDescriptionInput">Description</label>
            <textarea class="form-control" name="body" cols="30" rows="10" required placeholder="Body">{{old('body')}}</textarea>
        </div>

        <div class="form-group">
          <button class="btn btn-primary" type="submit">Add Post</button>
        </div>

        </form>

@endsection