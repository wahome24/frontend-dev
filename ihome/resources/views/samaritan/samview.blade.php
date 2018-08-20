@extends('layouts.design')
@section('content')
     <!-- beginning of navbar or header section -->
  <nav class="navbar my-navbar navbar-expand-md navbar-light bg-light " >
      <div class="container">
          <a class="navbar-brand" href="/"><img src="{{asset('img/LOGO.png')}}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                   <a href="/management">Go Back</a>
                </li>
            </ul>

        </div>
      </div>

  </nav>
  <br><br>
<div class="container">
    <div class="row padding">
        <div class="col-lg-6">
            <img width="100%" height="350px;" src="/storage/profilepics/{{$record->profilepic}}"><br>
        </div>

         <div class="col-lg-6">
            <h4>{{$record->Name}}</h4>
            <span><strong>Gender:</strong>{{$record->Gender}}</span>
            <p><strong>Bio:</strong>{{$record->Bio}}</p>
         
        </div>

    </div>
    
</div> 
<hr>
  <div class="container">
      <h4>Contact Information</h4>
      <p><strong>Mobile:</strong> <Mobile:>0734678890</Mobile:></p>
      <p><strong>Email:</strong> <a href="mailto:samaritan@gmail.com">samaritan@gmail.com</a></p>

  </div>

@if(!Auth::guest())
<a href="/management/{{$record->id}}/edit"><button class="btn btn-default">edit</button></a>
<br><br>
   {!!Form::open(['action'=>['ManagementsController@destroy',$record->id],'method'=>'POST','class'=>'float right']) !!}
   {{Form::hidden('_method','DELETE')}}
   {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
   {!!Form::close() !!}
@endif

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
@endsection

