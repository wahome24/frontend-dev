@extends('layouts.design')
@section('content')
  <!-- beginning of navbar or header section -->
  <nav class="navbar my-navbar navbar-expand-md navbar-light bg-gray " >
      <div class="container-fluid">
          <a class="navbar-brand" href="/"><img src="img/LOGO.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#home">Find a Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faqs">Faqs</a>
                </li>
            </ul>

        </div>
      </div>

  </nav>

    <div class="container">
        <div id="myCarousel" class="carousel" data-interval="1800" data-ride="carousel">
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
    <br> <br>

     <div class="container">
     <p>This page contain answers to some of our frequent asked questions from our users it will also addittional
         help on how to have an effecient time using the application. Feel free to look around.
     </p>

        <div id="accordion" class="accordion">
            <div class="card m-b-0">
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#itemOne">
                    <a class="card-title" href="#itemOne">
                        what is ihome
                    </a>
                </div>

                <div class="card-block collapse" id="itemOne">
                    <p>ihome is a platform that is meant to support the most vulnerable children homes in 
                        our societies.
                    </p>
                 </div>

                 <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#itemTwo">
                    <a class="card-title">
                        is ihome legit
                    </a>
                </div>

                <div class="card-block collapse" id="itemTwo">
                    <p>yes it is a legit platform. all money donated is not received individually but received by the
                        management of the showcased homes.
                    </p>
                 </div>

                 <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#itemThree">
                    <a class="card-title">
                       What is the login portal for
                    </a>
                </div>

                <div class="card-block collapse" id="itemThree">
                    <p> the portal is meant for the managment of the homes to be able to create the profiles of the
                        children and also of the management staff displayed in the relevant pages.
                    </p>
                 </div>

            </div>

        </div>
     </div>
     <br><br>

    
     <div class="container-fluid">
        <footer>
            <div class="row">
                <div class="col-md-4">
                    <h5>Newsletter</h5>
                    <p>we would love to update you on new additions to the platfrom. Kindly sign up to be updated</p>
                    {!! Form::open(['action'=>'EmailsController@store','method'=>'POST','class'=>'form-group validation'])!!}
                        <div id="form">
                            
                            <label>Email:</label>
                            <input type="text" class="form-control required email" placeholder="input a valid email" name="email"><br>
                            <button class="btn btn-danger" id="button" onclick="eras()" name="submit">Submit</button> <p id="popup"></p>
                        </div>
                        
                    {!! Form::close() !!}
                </div>

                <div class="col-md-4">
                    <h5>Contact Information</h5>
                    <p>Fell free to get in touch with any enuiries or if you know of a vulnerable home that you would like featured on the platform.<br>
                        Mobile:<a href="tel:+254714588140">Call 0714588140</a> <br>
                       <a href="mailto:info@ihome.com">info@ihome.com</a>
                    </p>
                </div>

                <div class="col-4">
                    <h5 class="float-right">Social Media</h5>
                    <div class="float-right social padding" >
                        <a href="#"><i class="fab fa-facebook" ></i></a>
                        <a href="#"><i class="fab fa-twitter" ></i></a>
                        <a href="#"><i class="fab fa-instagram" ></i></a>

                    </div>
                </div>

            </div>
        </footer>
        <footer class="bottom">
            <p>
                All Rights Reserved &copy;2018|<a href="/">ihome.com</a>|Caring makes the world go round!
            </p>

        </footer>

    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"> </script>
<script src="js/app.js"></script>
@endsection