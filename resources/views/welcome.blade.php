@extends('layout')

@section('content')

    <h1>Welcome </h1>

    <div class="jumbotron text-center">

        <h1>Welcome to ChatApp</h1>

        <p>Future is exciting Ready?</p>

        <p> <a href="/login" class="btn btn-primary" role="button">login</a> <a href="/register" class="btn btn-primary" role="button">Register</a></p>
   </div>

  {{--    <ul>
        @foreach($tasks as $task)
            <li> {{$task}} </li>
        @endforeach
    </ul>  --}}
@endsection
