@extends('layouts.design')
@section('content')
       <!-- beginning of navbar or header section -->
  <nav class="navbar my-navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/LOGO.png" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/samaritan">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/records">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/management">Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Portal</a>
                </li>
            </ul>

        </div>
      </div>

  </nav><br>
      
    <div class="container form-group">
        <p>Filter</p>
        <form action="{{ action('FlitersController@sort')}}" method="POST">
            {{ csrf_field() }}
        <label>Age:</label><input type="text" id="filter" name="age" placeholder="input age" class="form-cotrol" value="{{Request::get('age')}}"<label>Gender: </label><input type="checkbox" name="orphans[]" value="male"> Male<input type="checkbox" name="orphans[]" value="female"> Female <button class="btn btn-default"  name="submit">filter</button>
        <form>
        <form>
                 <button class="btn btn-danger filter"> <a href="/records">Reset</a></button> 
         </form>
          
          

    </div>
<div class="container">
     @include('functions.messages')
</div>
<br><br>
    <div class="profile">
            @if(count($orphans)>0)
            @foreach($orphans as $orphan)
                <div class="container padding" >
                    <div class="row padding" >
                        <div class="col-md-4">
                                <img width="300px" height="200px;" src="/storage/profilephoto/{{$orphan->profilephoto}}">
                                <br><br>
                                <hr>
                        </div>

                        <div class="col-md-8">
                                <span><a href="/records/{{$orphan->id}}">{{$orphan->name}}</a></span>
                                <p>{{$orphan->gender}}</p>
                                <p>{{$orphan->bio}}</p>
                        </div>

                    </div>
                    
                </div>
            @endforeach
            @else

            <p class="container">no profile found</p>

        @endif
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
@endsection

