@extends('layout')

@section('title', 'Add Post')

@section('content')

    <h1 class="title">Add New Post</h1>

    <form method="POST" action="/posts" enctype="multipart/form-data">
    @csrf
        
        <div class="form-group">
            <label for="formGroupTitleInput">Title</label>
            <input class="form-control {{$errors->has('title') ? 'alert alert-danger': ''}}" type="text" name="title" required value="{{old('title')}}" placeholder="title">
        </div>

        <div class="form-group">
            <label for="formGroupDescriptionInput">Description</label>
            <textarea class="form-control {{$errors->has('body') ? 'alert alert-danger' : ''}}" id='article-ckeditor' name="body" cols="30" rows="10" required placeholder="Body">{{old('body')}}</textarea>
        </div>

        <div class="form-group"
            <label for="exampleFormControlFile1">Cover image</label>
            <input type="file" class="form-control-file" name="image_name" id="FormControlFile1">
        </div>

        <div class="form-group">
          <button class="btn btn-primary" type="submit">Add Post</button>
        </div>

        </form>

@endsection