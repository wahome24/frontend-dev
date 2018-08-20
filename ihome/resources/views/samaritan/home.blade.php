@extends('layouts.design')
@section('content')
<!-- beginning of navbar or header section -->
  @extends('layouts.nav')
<!-- carousel section-->  
    <div class="container">
        <div id="myCarousel" class="carousel" data-interval="1800" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="myCarousel" data-slide-to="1"></li>
                <li data-target="myCarousel" data-slide-to="2"></li>
                <li data-target="myCarousel" data-slide-to="3"></li>

            </ul>

            <div class="carousel-inner">
                 <div class="carousel-item active">
                    <img src="img/pic3.JPG" width="100%;" height="500px;">
                    <div class="carousel-caption">
                        <h5 class="display-4">Good Samaritan</h5>
                        <h6>Caring Makes the world go round</h6>
                        <button type="button" class="btn btn-outline-light btn-lg">DONATE</button>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/pic5.JPG" width="100%;" height="500px;">
                    <div class="carousel-caption">
                        <h5 class="display-4">Good Samaritan</h5>
                        <h6>Caring Makes the world go round</h6>
                        <button type="button" class="btn btn-outline-light btn-lg">DONATE</button>

                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="img/pic6.JPG" width="100%;" height="500px;">
                    <div class="carousel-caption">
                        <h5 class="display-4">Good Samaritan</h5>
                        <h6>Caring Makes the world go round</h6>
                        <button type="button" class="btn btn-outline-light btn-lg">DONATE</button>

                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="img/pic7.JPG" width="100%;" height="500px;">
                    <div class="carousel-caption">
                        <h5 class="display-4">Good Samaritan</h5>
                        <h6>Caring Makes the world go round</h6>
                        <button type="button" class="btn btn-outline-light btn-lg">DONATE</button>

                    </div>
                </div>

            </div>

        </div> 
        </div>
    <br><br>
    <!-- beginning of body section -->
    <div class="container padding">
        <div class="row padding">
            <div class="col-12">
                <h3 id="about">About Good Samaritan</h3>
                <hr>
            </div>
            <div class="col-12">
                <p>
                    Good samritan childrens home was established in 2010 by a well wisher called gladys mumbi who unfortunately at the 
                    moment is at bed rest due to a medical condition. The home therefore survive through the mercies of other well wishers
                    and also sometimes get support from their main home based in mathare. Samlis startes with 13 children and now has a 
                    total of 74 children. The home faces a number of challenges which some include small living space, rent fees, high 
                    water bills and also lack of enough food and sponsorship. Since the owner cannot be able to take care of the children
                    the home is managed by volunteers like sera who has actually be living with the children since 2007. Most of the children
                    are below 13 yrs old of age. Its the responsibility of each oneof us to help this kind of homes however we can so 
                    that we can contribute to a better future for this children. Feel free to look around the website to learn how you 
                    can support.
                 </p>
            </div>
        </div>
        
        
    </div>
<br><br>
    <div class="container padding">
        <h3>Donate</h3>
        <hr>
        <div class="row">
            <div class="col-lg-6">
            <img src="img/pic3.JPG" class="img-flid" width="100%" height="550px;"> 
        </div>

            <div class="col-lg-6">
                <p>Your support will surely go a long way in making a difference. You can donate as litte as yo can its always the thought that
                    counts. Paybill number: 174379. Account name: Good Samaritan
                </p>
              {!!Form::open(['url'=>"{{url('/mpesa')}}" , 'class'=>'form-group']) !!}
                  <label>Enter Paybill</label>
                  <input type="number" class="form-control" placeholder="paybill" name="paybill">
                  <label>Enter Amount</label>
                  <input type="number" class="form-control" placeholder="amount" name="amount">
                  <label>Enter Phone Number</label>
                  <input type="number" class="form-control" placeholder="input number" name="number"><br>
                  <button class="btn btn-default mpesa">Submit</button>

               {!!Form::close()!!}
            </div>
        </div>
     </div>
<br><br>
     <div class="container padding">
        <h3>Sponsor</h3>
        <hr>
         <div class="row padding">
             <div class="col-lg-6">
                 <p>interested in sponsoring the home. This is mainly targeted to organiztions through their CSR. 
                     Anyone is free to register as a sponsor for the home.</p>
                 <div class="form-group">
                     {!!Form::open(['action'=>'HomesponsorsController@store','method'=>'POST','class'=>'validation']) !!}
                     <label>Name</label>
                     <input type="text" class="form-control required" placeholder="input name" name="name">
                     <label>Organization</label>
                     <input type="text" class="form-control" placeholder="organization name" name="organization">
                     <label>Email</label>
                     <input type="email"  class="form-control required email" placeholder="input email" name="email">
                     <label>Mobile Number</label>
                     <input type="text" class="form-control required" placeholder="e.g 0714588140" name="mobile">
                     <label>Sponsorship Type</label>
                     <select class="form-control" name="sponsorship">
                        <option class="form-control">Education</option>
                        <option class="form-control">Food</option>
                        <option class="form-control">Health</option>
                        <option class="form-control">Rent</option>
                     </select>
                    <label>Message</label>
                    <textarea class="form-control required" placeholder=" input any remarks concerning the sponsorship" name="message"></textarea><br>
                    <button class="btn btn-default" name="submit" type="submit">Submit</button>
                    {!!Form::close()!!}
                 </div>
            </div>
            <div class="col-lg-6">
                <img src="img/pic5.JPG" class="img-flid" width="100%" height="550px;">

            </div>

         </div>

     </div>
<br><br>
    <div class="container padding">
        <h3>Volunteer/Mentor</h3>
        <hr>
        <div class="row padding">
            <div class="col-lg-6">
             <img src="img/pic7.JPG" class="img-flud" width="100%" height="550px;">
            </div>
            <div class="col-lg-6">
            <p>are you wiling to dedicate your time to help take care of the children or you have particular skils
                and you would like to mentor these children. Register your details below amd the management will be 
                in touch on a way forward.
            </p>

                {!!Form::open(['action'=>'ServicesController@store','method'=>'POST','class'=>'form-group validator']) !!}
                <label>Name</label>
                <input type="text" class="form-control required" placeholder="input your name" name="name">
                <label>Email</label>
                <input type="text" class="form-control required email" placeholder="input your email" name="email">
                <label>Mobile Number</label>
                <input type="text" class="form-control required" placeholder="input your number" name="mobile">
                <label>Type</label>
                <select class="form-control required" name="type">
                    <option class="form-control">Volunteer</option>
                    <option class="form-control">Mentor</option>
                    <option class="form-control">Service Provider</option>
                </select>
                <label>Remarks</label>
                <textarea class="form-control" placeholder="Any comments?" name="remarks"></textarea><br>
                <button class="btn btn-danger"  type="submit" name="submit">Submit</button>
            {!!Form::close()!!}
        
            </div>
    
        </div>
        
    
    </div>
<br><br>
    <div class="container padding">
        <div class="row padding">
            <div class="col-lg-6">
                 <h3>Plan a Visit</h3>
                 <hr>
                <p>if you want to visit this home kindly fill this home so that the management can know on when to expect
                    the visit and also it will give them the opportunity to let you know of their most urgent needs that you
                    can donate to. The home is located at Dandora phase 5. The management will be in touch on how to get there
                    and you can also use the google maps through this link: <a href="google.com">Directions</a>.
                    Visitors are much welcome.
                </p>

                {!! Form::open(['action'=>'VisitsController@store','method'=>'POST','çlass'=>'form-group ']) !!}
                <label>Name</label>
                <input type="text" class="form-control required" placeholder="input name" name="name">
                <label>Organization</label>
                <input type="text" class="form-control" placeholder="visitor's name" name="organization">
                <label>Email</label>
                <input type="email" class="form-control required email" placeholder="input email" name="email">
                <label>Date of visit</label>
                <input type="date" class="form-control required" placeholder="select date" name="date">
                <label>Number of Visitors</label>
                <input type="number" class="form-control required" name="number"><br>

                <button class="btn btn-warning" type="submit" name="submit">Submit</button>
                 @include('functions.messages')
               {!! Form::close() !!} <br>
            </div>
            <div class="col-lg-6">
            <div id="map"></div>
     <script>
        function initMap() {
            var samlis = { lat: -1.254051, lng: 36.895264 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: samlis
            });
            var marker = new google.maps.Marker({
                position: samlis,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPHalhF-g9trWVdTFjZpL9LIYws04dRf4&callback=initMap">
    </script>
            
           </div>


           </div>

           </div>


<!-- footer section -->
        <footer class="bottom">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Contact Information: Mobile:<a href="tel:+254714588140">Call 0714588140</a>|Email:<a href="mailto:samaritan@gmail.com">samaritan@gmail.com</a>
                     </p>

                </div>
            </div>
            
        </footer>
<!-- scripts -->       
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"> </script>
<script src="{{asset('js/app.js')}}"></script>
@endsection