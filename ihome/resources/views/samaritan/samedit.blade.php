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
                    <a href="/management/create">Management Records</a>
                </li>
                <li>
                    <a href="/reports">Reports</a>
                </li>
            </ul>
        </nav>
        
    </div>
<br>
<div class="container" id="orphans">
    @include('functions.messages')  
        {!! Form::open(['action'=>['OrphansController@update',$orphan->id], 'method'=>'POST','enctype'=> 'multipart/form-data'])  !!}
          <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="input name" name="name" value="{{$orphan->name}}">
                <label>Age</label>
          <input type="number" class="form-control" placeholder="input age" name="age" value="{{$orphan->age}}">
                <label>Date Joined</label>
                <input type="date" class="form-control" placeholder="input date" name="date" value="{{$orphan->date}}">
                <label>Gender</label>
                <select class="form-control" name="gender">
                    <option class="form-control">Male</option>
                    <option class="form-control">Female</option>
                </select>
                <label>Sponsorship</label>
                <select class="form-control" name="sponsorship">
                    <option class="form-control">Yes</option>
                    <option class="form-control">No</option>
                </select>
                <label>Education Level</label>
                <select class="form-control" name="education">
                    <option class="form-control">Lower Primary</option>
                    <option class="form-control">Upper primary</option>
                    <option class="form-control">High School</option>
                    <option class="form-control">University</option>
                </select>
                <label>Bio</label>
                <textarea class="form-control" name="bio"></textarea>
                <label>Profile Picture</label>
                <input type="file" class="form-control"> <br>
                
                <button class="btn  btn-danger">Submit</button>
             </div>
           {{Form::hidden('_method','PUT')}}
         {!! Form::close() !!}


    
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
@endsection