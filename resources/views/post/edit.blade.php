@extends('layout')

@section('title', 'Ad')

@section('content')

    <h1 class="title">Add New Post</h1>

    <form method="POST" action="/posts/{{$post->id}}">
    @csrf
    @method("PATCH")
        
        <div class="form-group">
            <label for="formGroupTitleInput">Title</label>
            <input class="form-control {{$errors->has('title') ? 'alert alert-danger': ''}}" type="text" name="title" required value="{{$post->title}}" placeholder="title">
        </div>

        <div class="form-group>
            <label for="formGroupDescriptionInput">Description</label>
            <textarea class="form-control {{$errors->has('body') ? 'alert alert-danger': ''}}" id='article-ckeditor' name="body" cols="30" rows="10" required placeholder="Body">{{$post->body}}</textarea>
        </div>

        <div class="form-group">
          <button class="btn btn-primary" type="submit">Save</button>
        </div>

        </form>

@endsection