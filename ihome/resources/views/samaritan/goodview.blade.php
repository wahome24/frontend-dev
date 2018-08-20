@extends('layouts.design')

@section('content')
    <!-- beginning of navbar or header section -->
  <nav class="navbar my-navbar navbar-expand-md navbar-light bg-gray " >
      <div class="container">
          <a class="navbar-brand" href="/"><img src="{{asset('img/LOGO.png')}}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                   <a href="/records">Go Back</a>
                </li>
            </ul>

        </div>
      </div>

  </nav>
<br><br>
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <img width="100%" height="380px;" src="/storage/profilephoto/{{$orphan->profilephoto}}">
          </div>

          <div class="col-lg-6">
            <h3>{{$orphan->name}}</h3>
            <p> <strong>Age:</strong> {{$orphan->age}}</p>
            <p> <strong>Gender:</strong>  {{$orphan->gender}}</p>
            <p> <strong>Date Joined:</strong>  {{$orphan->date}}</p>
            <p> <strong>Education Level:</strong>  {{$orphan->education}}</p>
            <p><strong>Bio:</strong> {{$orphan->bio}}</p>
            <a href="/records/{{$orphan->id}}/edit"><button class="btn btn-default eras">Edit</button></a>
            @if(!Auth::guest()) 
                {!!Form::open(['action'=>['OrphansController@destroy',$orphan->id],'method'=>'POST','class'=>'float-right']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                 {!!Form::close() !!}
            @endif

          </div>
     
      </div>
   
<hr><br>
   <div class="container">
       <div class="row">
           <div class="col-6">
                    <h4>Sponsor : {{$orphan->name}} </h4>
                    <form class="form-group">
                        <label>Sponsorship Amount</label>
                        <select class="form-control">
                            <option> ksh 1000</option>
                            <option> ksh 3000</option>
                            <option> ksh 5000</option>
                        </select>

                        <label>Sponsorship level</label>
                        <select class="form-control">
                            <option> one time</option>
                            <option> weekly</option>
                            <option> monthly</option>
                        </select>
                        <label>Mobile</label>
                        <input type="text" class="form-control" placeholder="provide your mobile number"> <br>
                        <h5>Personal Information</h5>
                        <hr>
                        <label>Full Name:</label>
                        <input type="text" class="form-control">
                        <label>Email:</label>
                        <input type="email" class="form-control">
                        <label>Country:</label>
                        <select class="form-control">
                            <option> Kenya </option>
                            <option>Tanzania</option>
                            <option>Uganda</option>
                          </select> 
                        <br>
                        <button class="btn btn-default eras">Submit</button>
                         </form>
           </div>

           <div class="col-6">
              

           </div>

       </div>
       <h3>Adopt</h3>
               <p> show your interest to adopt this child ny filling the form below:</p>
               <form class="form-group">
                   <label>Full Name</label>
                   <input type="text" class="form-control" placeholder="enter your full name">
                   
                   <label>Email</label>
                   <input type="email" class="form-control" placeholder="enter your email"> 

                   <label>Confirm Email</label>
                   <input type="email" class="form-control" placeholder="enter your email"> 

                   <label>Mobile</label>
                   <input type="text" class="form-control" placeholder="provide your mobile number"> 

                   <label>Country</label>
                   <select class="form-control">
                            <option> Kenya </option>
                            <option>Tanzania</option>
                            <option>Uganda</option>
                    </select> 
                <br>
                    <button class="btn btn-default">Register</button>

               </form>

   </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"> </script>
<script src="{{asset('js/app.js')}}"></script>
@endsection

