@extends('layouts.design')

@section('content')
    <!-- beginning of navbar or header section -->
  <nav class="navbar my-navbar navbar-expand-md navbar-light bg-gray " >
      <div class="container">
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
<!-- start of the image slider -->
    

        <div id="myCarousel" class="carousel my-carousel container" data-interval="2000" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="myCarousel" data-slide-to="1"></li>
                <li data-target="myCarousel" data-slide-to="2"></li>
                <li data-target="myCarousel" data-slide-to="3"></li>

            </ul>
            <div class="carousel-inner">
                 <div class="carousel-item active">
                    <img src="img/pic3.JPG" class="img-fluid" width="100%;" height="550px;">
                    <div class="carousel-caption">
                        <h5 class="display-4">Good Samaritan</h5>
                        <h6>Caring Makes the world go round</h6>
                        <button type="button" class="btn btn-outline-light btn-lg">Find a Home</button>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/pic5.JPG" class="img-fluid" width="100%;" height="550px;">
                    <div class="carousel-caption">
                        <h5 class="display-4">Good Samaritan</h5>
                        <h6>Caring Makes the world go round</h6>
                        <button type="button" class="btn btn-outline-light btn-lg">Find a Home</button>

                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="img/pic6.JPG" class="img-fluid" width="100%;" height="550px;">
                    <div class="carousel-caption">
                        <h5 class="display-4">Good Samaritan</h5>
                        <h6>Caring Makes the world go round</h6>
                        <button type="button" class="btn btn-outline-light btn-lg">Find a Home</button>

                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="img/pic7.JPG" class="img-fluid" width="100%;" height="550px;">
                    <div class="carousel-caption">
                        <h5 class="display-4">Good Samaritan</h5>
                        <h6>Caring Makes the world go round</h6>
                        <a href="#home"><button  href="#home" class="btn btn-default ">Find a Home</button></a>

                    </div>
                </div>

            </div>

        </div>
    <br>

    <div class="container padding">
        <div class="row ">
            <div class="col-12">
                 <h4 id="about">About ihome</h4>
                 <hr>
            </div>
            <div class="col-12">
                <p>
                    ihome is basically an online platform to showcase some of more vulnerable childrens homes in the society who do not even
                    have the capacity to own their own websites so that through the awareness created they can also get the
                    opportunity to receive support either monery donations which will be done through this platform or through
                    material donation which can be achieved by visitation to this homes. Look around to figure out how you
                    can support this homes and create a better future for the children. The main objective of the platform
                    is to create awareness about this homes and let people know they exist so that they can get involved
                    and offer helping hand
                </p>
            </div>

        </div>
              
      </div>
                <br><br>

   <div class="container padding">
       <div class="row padding">
           <div class="col-lg-6">
             <img src="img/pic2.JPG" class="img-fluid" width="100%" height="300px;" >
           </div>

           <div class="col-lg-6">
            <h4 class="code">How to Support</h4>
            <hr>
            <p>There are various way one can get involved.</p>
            <ol>
                <li>The first step is to find a home that you want to support using the dropdown list below.</li>
                <li>You can decide to donate money which will be done through Mpesa and received by the management of that particular home
                </li>
                <li>You can plan to visit the home of your choice to interact with the children and offer material donations</li>
                <li>You can sign up to sponsor the home or to sponsor a particular child individually or even adopt</li>
                <li>And if interested you can also sign up as a volunteer or a mentor </li>
            
            </ol>

           </div>

       </div>
 </div>
                <br><br><br>

           <div class="container">
               <div class="row">

                <div class="col-lg-6">
                <h3 class="code" >Find a Home <a name="home"></a></h3>
                <hr>
                <br>
                <p>Exicited to make the first to help a child in need? </p>
                <div class="form-group">
                    <select class="form-control" onchange="window.location.href= this.value">
                     <option value="/">Choose a Home</option>
                     <option value="/samaritan">Good samaritan children's home</option> 
                     <option value="/samlis"> Samlis children's home</option>
                    </select>
                
                </div>
                </div>

                   <div class="col-lg-6">
                 <img src="img/pic1.JPG" class="img-fluid" width="100%" height="300px;">
                   </div>

               </div>

           </div>    
    <br><br><br>
    <div class="container-fluid">
    <button class="fun" data-toggle="collapse" data-target="#emoji">ihome</button>
    <div id="emoji" class="collapse">
        <div class="container-fluid padding" >
            <p class="text-center">Caring makes the world go round.Lend a helping hand today!!</p>

        </div>
    </div>
    </div>
    

    <div class="container-fluid padding">
        <footer>
            <div class="row text-center padding">
                <div class="col-sm-12 col-md-4">
                    <h5>Newsletter</h5>
                    <hr class="light">
                    <p>we would love to update you on new additions to the platfrom. Kindly sign up to be updated</p>
                    {!! Form::open(['action'=>'EmailsController@store','method'=>'POST','class'=>'form-group validation eras'])!!}
                        <div id="form">
                            
                            <label>Email:</label>
                            <input type="text" class="form-control required email" placeholder="input a valid email" name="email"><br>
                            <button class="btn btn-danger" id="button" onclick="eras()" name="submit">Submit</button> <p id="popup"></p>
                        </div>
                        
                    {!! Form::close() !!}
                </div>

                <div class="col-sm-12 col-md-4">
                    <h5>Contact Information</h5>
                    <hr class="light">
                    <p>Fell free to get in touch with any enuiries or if you know of a vulnerable home that you would like featured on the platform.<br>
                        Mobile:<a href="tel:+254714588140">Call 0714588140</a> <br>
                        Email:<a href="mailto:info@ihome.com">info@ihome.com</a>
                    </p>
                </div>

                <div class="col-sm-12 col-md-4">
                    <h5>Social Media</h5>
                    <hr class="light">
                    <div class="social" >
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