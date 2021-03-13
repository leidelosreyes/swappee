<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Swappee</title>
        <link rel="icon"  href="image/swappee_favincon.jpg" type="image/jpg">
         <!-- OwlCarousel -->
         <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mdb.min.css">
        <!-- css link -->
        <link rel="stylesheet" href="/css/index.css">
          <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"> 
       
    </head> 
    <body>

    <!--topnavbar!-->
<section class="back">
    <div class="container cons">
        <div class="row top-bar" id="main">
            <div class="col">
                <span class="text-white">
                  <a href="https://www.facebook.com/">
                <i class="fab fa-facebook-f" style="color:#3B5998; font-size:15px;"></i>
                </a>
                </span>
               
                <span class="text-white">
                <a href="https://www.twitter.com/">
                <i class="fab fa-twitter" style="color:#55ACEE; font-size:15px;" ></i>
                </a>
                </span>
                
                <span class="text-white">
                <a href="https://www.instagram.com/">
                <i class="fab fa-instagram" style="color:#125688; font-size:15px;"></i>
                </a>
                </span>
             </div>
           
             <div class="col text-right" >
               
               @if (Route::has('login'))
                <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                    @auth
                        <a href="{{ url('/home') }}" style="font-size:15px" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="font-size:15px"  class="text-sm text-gray-400 underline"><i class="fas fa-sign-in-alt"></i> Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="font-size:15px"class="ml-4 text-sm text-gray-400 underline"><i class="fas fa-user-plus"></i> Register</a>
                        @endif
                    @endauth
                <!-- </div> -->
               
            @endif
            
            </div>
    </div>
</section>

<!-- SignUp Modal!-->
<div class="modal fade" id="signup">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title text-center w-100 font-weight-bold">Sign Up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button>
      </div>
      <div class="modal-body mx-3">
       
      <div class="md-form mb-5">
        <i class="fas fa-user prefix grey-text"></i>
        <input type="text" class="form-control validate">
        <label data-error="wrong" data-sucess="right">Your Name Full Name</label>
      </div>

      <div class="md-form mb-5">
      <i class="far fa-envelope prefix grey-text"></i>
        <input type="email" class="form-control validate">
        <label data-error="wrong" data-sucess="right">Your Email</label>
      </div>

      <div class="md-form mb-5">
        <i class="fas fa-key prefix grey-text"></i>
        <input type="password" class="form-control validate">
        <label data-error="wrong" data-sucess="right">Your Password</label>
      </div>
      <div class="md-form mb-5">
        <i class="fas fa-key prefix grey-text"></i>
        <input type="password" class="form-control validate">
        <label data-error="wrong" data-sucess="right">Confirm Password</label>
      </div>

      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary">Sign-up</button>
      </div>
    </div>
  </div>
</div>
<!-- end!-->


<!-- SignIn Modal!-->
<div class="modal fade" id="signin">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold">SignIn</h3>
        <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button>
      </div>

      <div class="modal-body mx-4">
        <div class="md-form">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="email" class="form-control validate">
          <label data-error="wrong" data-success="right">Your Email</label>
        </div>

        <div class="md-form">
          <i class="fas fa-key prefix grey-text"></i>
          <input type="password" class="form-control validate">
          <label data-error="wrong" data-success="right">Your Password</label>
          <p class="font-small blue-text d-flex justify-content-center">Forgot <a href="" class="blue-text ml-1">Password</a></p>
        </div>

        <div class="text-center mb-3">
          <button type="button" class="btn btn-primary btn-block z-dept-la">SignIn</button>
        </div>
        <p class="font-small dark-rey-text d-flex justify-content-center">or sign in with:</p>

        <div class="row my-3 justify-content-center">
          <button type="button" class="btn btn-primary z-depth-la"><i class="fab fa-facebook text-center"></i></button>
          <button type="button" class="btn btn-pink z-depth-la"><i class="fab fa-instagram text-center"></i></button>
          <button type="button" class="btn btn-red z-depth-la"><i class="fab fa-google-plus-g text-center"></i></button>
        </div>
      </div>


    </div>
  </div>
</div>
<!-- end!-->







<!-- navbar!-->
<!--Navbar-->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark">

  <!-- Navbar brand -->
  <div class="container">
  <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('/image/swaplogo-removebg-preview.png')}}" href="" alt="hhhhgg">
                <!-- {{ config('app.name') }} -->
                </a>        

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbar">

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/index') }}">Home</a>
      </li>
      
        <!-- Dropdown -->
        <li class="nav-item dropdown menu-area">
        <a class="nav-link dropdown-toggle" id="mega-one" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Categories</a>
        <div class="dropdown-menu dropdown-primary mega-area" aria-labelledby="mega-one">
          <div class="row">
            
          <div class="col-sm-6 col-lg-3 menu-name">
              <h5 class="text-uppercase font-weight-bold">Collectibles</h5>
              <hr class="bg-dark mb-4 mt-0 d-inline-block" style="width: 100px; height: 2px">
              <a href="" class="dropdown-item">Antique</a>
              <a href="" class="dropdown-item">Coins</a>
              <a href="" class="dropdown-item">Souvenirs</a>
              <a href="" class="dropdown-item">Crystals</a>
            </div>
           
            <div class="col-sm-6 col-lg-3 menu-name">
            <h5 class="text-uppercase font-weight-bold">Electronic</h5>
              <hr class="bg-dark mb-4 mt-0 d-inline-block" style="width: 100px; height: 2px">
              <a href="" class="dropdown-item">Phones</a>
              <a href="" class="dropdown-item">Watches</a>
              <a href="" class="dropdown-item">Television</a>
              <a href="" class="dropdown-item">Computers</a>
            </div>
           
            <div class="col-sm-6 col-lg-3 menu-name">
            <h5 class="text-uppercase font-weight-bold">Jewelries</h5>
              <hr class="bg-dark mb-4 mt-0 d-inline-block" style="width: 100px; height: 2px">
              <a href="" class="dropdown-item">Ring</a>
              <a href="" class="dropdown-item">Necklace</a>
              <a href="" class="dropdown-item">Bracelates</a>
              <a href="" class="dropdown-item">Earing</a>
            </div>
            
            <div class="col-sm-6 col-lg-3 menu-name">
            <h5 class="text-uppercase font-weight-bold">Shoes</h5>
              <hr class="bg-dark mb-4 mt-0 d-inline-block" style="width: 100px; height: 2px">
              <a href="" class="dropdown-item">Leather Shoes</a>
              <a href="" class="dropdown-item">Running Shoes</a>
              <a href="" class="dropdown-item">Mens Shoes</a>
              <a href="" class="dropdown-item">Women Shoes</a>
            </div>
           
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
      </li>

      


    </ul>
    <!-- Links -->

    <!-- <form class="form-inline">
    <div class="md-form my-0">
      <input class="form-control mr-sm-2" type="text"  aria-label="Search">
    </div>
    <button class="btn btn-info btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
  </form> -->
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
</div>


@yield('content')







 <!--Footer Start-->
<footer class="page-footer bg-dark">
     <!--SocialMedia Start-->

     <!--SocialMedia End-->
      <div class="container text-center text-md-left mt-5">
        <div class="row">
         
        <div class="col-md-3 mx-auto mb-4 mt-5">
            <h6 class="text-uppercase font-weight-bold">The Providers</h6>
            <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
             <p class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero magni dolorum minus a inventore numquam placeat, aliquid pariatur.</p>
          </div>

          <div class="col-md-2 mx-auto mb-4 mt-5">
            <h6 class="text-uppercase font-weight-bold">Quik Links</h6>
            <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">

            <ul class="list-unstyled">
              <li class="my-2"><a href="{{ url('/terms_condition') }}">Terms & Conditions</a></li>
              <li class="my-2"><a href="{{ url('/privacy_policy') }}">Privacy & Policy</a></li>
            </ul>
          </div>

          <div class="col-md-2 mx-auto mb-4 mt-5">
            <h6 class="text-uppercase font-weight-bold">Usedfull links</h6>
            <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">

            <ul class="list-unstyled">
              <li class="my-2"><a href="">Home</a></li>
              <li class="my-2"><a href="">Categoty</a></li>
              <li class="my-2"><a href="">AboutUs</a></li>
              <li class="my-2"><a href="">ContactUs</a></li>
            </ul>
          </div>

          <div class="col-md-3 mx-auto mb-4 mt-5">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px">

            <ul class="list-unstyled">
              <li class="my-2"><i class="fas fa-home mr-3"></i>Philippines, Caloocan City</li>
              <li class="my-2"><i class="far fa-envelope mr-3"></i>tradee@domain.com</li>
              <li class="my-2"><i class="fas fa-phone mr-3"></i>+63 1234 4223</li>
            </ul>
          </div>
        
        </div>
      </div>

      <div class="footer-copyright text-center py-3">
        <p>&copy; Copyright<a href=""> tradee@domain.com</a></p>
      </div>

</footer>
 <!--Footer End-->



<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/image/pic1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/image/pic3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/image/pic2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->

<!--services!-->
<!--<div class="service-area section-padding">
    <div class="container">
        <h2>Our Services</h2>
        <p class="container text-center mb-4">Trading is one of the oldest social activities of human beings. Our vision is a world in which trading, through the internet helps promote peace and social change. Our mission at Swappiness is to play a key role in that vision by providing a fantastic, easy to use, social platform for bartering and swapping. Our name refers to that feeling of satisfaction when in the course of a trade, all parties are happy.</p>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-service">
                    <div class="symbol">
                    <i class="fas fa-key susi"></i>
                    </div>
                    <h3>Register</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum itaque maiores maxime eius</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-service">
                    <div class="symbol">
                    <i class="fas fa-shopping-cart kart"></i>
                    </div>
                    <h3>Add Items</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum itaque maiores maxime eius</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-service">
                    <div class="symbol">
                    <i class="fas fa-bullhorn horn"></i>
                    </div>
                    <h3>Make Offers</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum itaque maiores maxime eius</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-service">
                    <div class="symbol">
                    <i class="fas fa-tags tag"></i>
                    </div>
                    <h3>Trade</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum itaque maiores maxime eius</p>
                </div>
            </div>
        </div>
    </div>
</div>






        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            </div>

         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
          <!--  <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>!-->
<!-- Bootstrap -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Plugin file -->
<!-- <script src="./js/addons/datatables.min.js"></script> -->
<!-- OwlCarousel -->    
<script src="{{ asset('js/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/index.js') }}" type="text/javascript"></script>
    </body>
</html>
