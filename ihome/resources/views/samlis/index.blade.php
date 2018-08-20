@extends('layouts.design')
@section('content')
    <div class="container-fluid">
        <div class="logo">
          <img src="img/LOGO.png" id="logo">
        </div>
        <nav class="header">
            <ul>
                <li>
                    <a href="/samlis">Home</a>
                </li>
                <li>
                    <a href="/samlisprofile">Profile</a>
                </li>
                <li>
                    <a href="/faqs">Faqs</a>
                </li>
                <li>
                    <a href="/samlislogin">portal</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <div id="myCarousel" class="carousel" data-interval="1800" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="myCarousel" data-slide-to="1"></li>
                <li data-target="myCarousel" data-slide-to="2"></li>
                <li data-target="myCarousel" data-slide-to="3"></li>

            </ol>

            <div class="carousel-inner">
                 <div class="carousel-item active">
                    <img src="img/pic3.JPG" width="100%;" height="500px;">
                </div>
                <div class="carousel-item">
                    <img src="img/pic5.JPG" width="100%;" height="500px;">
                </div>
                <div class="carousel-item ">
                    <img src="img/pic6.JPG" width="100%;" height="500px;">
                </div>
                <div class="carousel-item ">
                    <img src="img/pic7.JPG" width="100%;" height="500px;">
                </div>

            </div>

        </div> 
        </div>
    <br><br>
    <div class="container-fluid">
        <h3 id="about">About Samlis</h3>
        <p>
         Samlis was established in 2006 by a well wisher samson macharia mwangi who is the sole supporter and conduct
         day to day jobs to atleast provide food to the children. According to the management this becommes very challenging
         because they are not able to raise enough money to cater for the needs of the children and therefore they end up
         surviving on very little and on the mercies of well wishers who come to  visit the homes. It is home to about 300
         children who some of them are complete oprhans while others come from very poor background. The role of the Samlis
         center is to provide a home to the orphans and also education to them and to the rest of the children who cannot even
         afford school fees . They have to provide food to all this children which is actualy on the major challenges they
         are facing. The ages of this children ranges from as low as 4 yrs old to some of them who are above 20. This center
         needs our help in orderto be able to cater for this children and the only way to really understsnd their challenges
         is to plan a visit and find out more and if that is not possible there are other ways you show your support. As little
         as it is , its the thought that counts. The home is located in Dandora phase 5.Check out the plan a visit section to
         find out more on directions.  
        </p>
    </div>
<br><br>
    <div class="container-fluid">
        <h4>Donate</h4> <br>
        <div class="row">
            <div class="col-6">
            <img src="img/pic3.JPG" width="100%" height="500px;"> 
        </div>

            <div class="col-6">
                <p>Your support will surely go a long way in making a difference. You can donate as litte as yo can its always the thought that
                    counts. Paybill number: 345678. Account name: samlis center
                </p>
              <form class="form-group">
                  <label>Enter Paybill</label>
                  <input type="number" class="form-control" placeholder="paybill">
                  <label>Enter Account Name</label>
                  <input type="text" class="form-control" placeholder="account name">
                  <label>Enter Amount</label>
                  <input type="number" class="form-control" placeholder="amount">
                  <label>Enter Name</label>
                  <input type="text" class="form-control" placeholder="input name">
                  <label>Enter Email</label>
                  <input type="number" class="form-control" placeholder="input email"><br>
                  <button class="btn btn-default">Submit</button>

              </form>
            </div>
        </div>
     </div>
<br><br>
     <div class="container-fluid">
        <h4>Sponsor</h4><br>
         <div class="row">
             <div class="col-6">
                 <p>interested in sponsoring the home. This is mainly targeted to organiztions through their CSR. 
                     Anyone is free to register as a sponsor for the home.</p>
                 <form class="form-group">
                     <label>Name</label>
                     <input type="text" class="form-control" placeholder="input name">
                     <label>Organization</label>
                     <input type="text" class="form-control" placeholder="organization name">
                     <label>Email</label>
                     <input type="email"  class="form-control" placeholder="input email">
                     <label>Sponsorship Type</label>
                     <select class="form-control">
                        <option class="form-control">Education</option>
                        <option class="form-control">Food</option>
                        <option class="form-control">Health</option>
                        <option class="form-control">Rent</option>
                     </select>
                    <label>Duration</label>
                    <select class="form-control">
                        <option class="form-control">Daily</option>
                        <option class="form-control">Weekly</option>
                        <option class="form-control">Monthly</option>
                        <option class="form-control">Annully</option>
                    </select>
                    <label>Message</label>
                    <textarea class="form-control" placeholder=" input any remarks concerning the sponsorship"></textarea><br>
                    <button class="btn btn-default">Submit</button>
                 </form>
            </div>
            <div class="col-6">
                <img src="img/pic5.JPG" width="100%" height="550px;">

            </div>

         </div>

     </div>
<br><br>
    <div class="container-fluid">
        <h4>Volunteer/Mentor</h4><br>
        <div class="row">
            <div class="col-6">
             <img src="img/pic7.JPG" width="100%" height="550px;">
            </div>
            <div class="col-6">
            <p>are you wiling to dedicate your time to help take care of the children or you have particular skils
                and you would like to mentor these children. Register your details below amd the management will be 
                in touch on a way forward.
            </p>
                <form class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="input your name">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="input your email">
                <label>Mobile Number</label>
                <input type="text" class="form-control" placeholder="input your number">
                <label>Type</label>
                <select class="form-control">
                    <option class="form-control">Volunteer</option>
                    <option class="form-control">Mentor</option>

                </select>
                <label>Remarks</label>
                <textarea class="form-control" placeholder="Any comments?"></textarea><br>
                <button class="btn btn-danger">Submit</button>
             </form>
        
            </div>
    
        </div>
        
    
    </div>
<br><br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                 <h4>Plan a Visit</h4>
                <p>if you want to visit this home kindly fill this home so that the management can know on when to expect
                    the visit and also it will give them the opportunity to let you know of their most urgent needs that you
                    can donate to. The home is located at Dandora phase 5. The management will be in touch on how to get there
                    and you can also use the google maps through this link: <a href="google.com">Directions</a>.
                    Visitors are much welcome.
                </p>
            <form class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="input name">
                <label>Organization</label>
                <input type="text" class="form-control" placeholder="organization name">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="input email">
                <label>Date of visit</label>
                <input type="date" class="form-control" placeholder="select date">
                <label>Number of Visitors</label>
                <input type="number" class="form-control"><br>

                <button class="btn btn-warning">SEND</button>

            </form>
            </div>
            <div class="col-6">
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


    
        <footer class="bottom">
            <p>
               Contact Information: Mobile:0756807435|0734675489  Email:<email>samliscenter@gmail.com</email>
            </p>

        </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
@endsection