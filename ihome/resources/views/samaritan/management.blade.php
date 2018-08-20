@extends('layouts.design')
@section('content')
 <!-- beginning of navbar or header section -->
@extends('layouts.nav')
<!-- body section -->
<div class="container">
     @include('functions.messages')
</div>
<br><br>
   @if(count($records)>0)
   @foreach($records as $record)
     <div class="container">
         <div class="row">
             <div class="col-md-4">
                <img width="300px" height="200px;" src="/storage/profilepics/{{$record->profilepic}}">
                  <br><br>
                  <hr>
             </div>
            <div class="col-md-8">
                 <span><a href="/management/{{$record->id}}">{{$record->Name}}</a></span>
                 <p>{{$record->Bio}}</p>
            </div>
         </div>
     </div>
   @endforeach
  @else
 <p>no management profiles found</p>

  @endif
<!-- body ends -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
 @endsection
