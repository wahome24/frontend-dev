@extends('layouts.design')

@section('content')
    <div class="container-fluid">
        <div class="logo">
        <img src="{{asset('img/LOGO.png')}}" id="logo">
        </div>
        <nav class="header">
            <ul>
                <li>
                    <a href="/records">Orphans Records</a>
                </li>
                <li>
                    <a href="/managementrec">Management Records</a>
                </li>
                <li>
                    <a href="/reports">Reports</a>
                </li>
            </ul>
        </nav>
        
    </div>

    <div class="container">
       
    </div>

    
<br>
<div class="container" id="orphans">
    @include('functions.messages')
    {!!Form::open(['action'=> ['ManagementsController@update',$record->id], 'method'=>'POST','enctype'=> 'multipart/form-data'])!!}
        <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="input name" name="name" value="{{$record->Name}}">
        <label>Date Joined</label>
        <input type="date" class="form-control" placeholder="input date" name="date" value="{{$record->Date}}">
        <label>Gender</label>
        <select class="form-control" name="gender" value="{{$record->Gender}}">
            <option class="form-control">Male</option> 
            <option class="form-control">Female</option>
        </select>
        <label>Bio</label>
        <textarea class="form-control" name="bio" value="{{$record->Bio}}" ></textarea>
        <label>Profile Picture</label>
        <input type="file" class="form-control"> <br>
         <button class="btn  btn-danger">Submit</button>
        </div>
    {{Form::hidden('_method','PUT')}}

    {!!Form::close()!!}
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
@endsection