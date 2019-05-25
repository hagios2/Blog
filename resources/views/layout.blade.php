<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Pagers')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="screen" href="/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="css/app.css">
    <script src="js/app.js" charset="utf-8"></script>

    <style>
        .is-complete{
            text-decoration: line-through;
        }
    </style>
</head>
<body>

{{--  <nav class="navbar navbar-expand-lg navbar-light bg-light">

   <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
    </button> -->

    <div class=" navbar-collapse" id="navbarSupportedContent">
       


        <ul class="nav navbar-nav navbar-right">
                <li class="nav-item"> <a class="nav-link" href="/posts/create">Create Post</a>
        </ul>
    </div>
</nav>  --}}

@include('navbar.nav')


@include('errors')



<div class="container">

    @yield('content')

</div>


<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    
</body>
</html>