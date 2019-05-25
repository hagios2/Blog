@if($errors->any())

<div class="field">

    <ul class="list-group">
        @foreach($errors->all() as $error)
        
            <li class="alert alert-danger">
                {{$error}}
            </li>
        
        @endforeach

    </ul>
</div>

@endif


@if(session('success'))

    <div class="alert alert-success">
      
        {{session('success')}}

    </div>

@endif


@if(session('errors'))

    <div class="alert alert-danger">
      
        {{session('errors')}}

    </div>

@endif