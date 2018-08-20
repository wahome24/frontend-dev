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
                    <a class="nav-link" href="/records/create">Orphans Records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/management/create">Management Records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/orphanreports">Reports</a>
                </li>
            </ul>

        </div>
      </div>

  </nav>
    
<br>
<div class="container" id="orphans">
 @include('functions.messages')
    {!!Form::open(['action'=> 'ManagementsController@store', 'method'=>'POST', 'enctype'=> 'multipart/form-data'])!!}
        <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="input name" name="name">
        <label>Date Joined</label>
        <input type="date" class="form-control" placeholder="input date" name="date">
        <label>Gender</label>
        <select class="form-control" name="gender">
            <option class="form-control">Male</option>
            <option class="form-control">Female</option>
        </select>
        <label>Bio</label>
        <textarea class="form-control" name="bio" ></textarea>
        <label>Profile Picture</label>
        <input type="file" class="form-control" name="profilepic"> <br>
         <button class="btn  btn-danger">Submit</button>
        </div>

    {!!Form::close()!!}
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

@endsection