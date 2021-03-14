<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swappee</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="{{asset('js/jquery.js')}}"></script>
  
</head>
<body>
<section class="back">
			<div class="container cons">
				<div class="row top-bar" id="main">
					<div class="col">
						
						<span class="">
					
            <span class="">
					<a style="color:white;"> Swappee@gmail.com</a>
					</span>
						 <!-- <span class="">
						<i class="fab fa-twitter" style="color: #55ACEE;"></i>
						</span>
						
						<span class="">
						<i class="fab fa-instagram" style="color:#dd4b39;"></i>
						</span> -->
						
						
					</div>
				
					<div class="col text-right">
					
						<span class="">
					<a href="views/login.php"> <i class="fa fa-phone"> +63-4617-99654</i></a>
						</span>

						
					
					</div>
			</div>
		</section>

		
        <section>
    <nav class="navbar navbar-expand-md navbar-dark">
		<div class="container" style="margin-top: 15px;padding-bottom: 5px;">
			<a href="index.php" class="navbar-brand logo-nav"><img src="image/swappee_logo.png" style="width:150px;height: 50px;margin-bottom: 5px;" alt=""></a>
			
			<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
			</button>
			
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="index.php"  class="nav-item nav-link active navfonts" style="font-size: 1rem;">Home</a></li>
					<li><a href="about.php" class="nav-item nav-link  navfonts" style="font-size: 1rem;">About Us</a></li>
					<li class="dropdown">
						<!-- <a href="auction.php" class="nav-item nav-link  navfonts"  data-toggle="dropdown"style="font-size: 18px;">Auction</a> -->
						<!-- <div class="dropdown-menu">
							<a href="#" class="dropdown-item">Dropdown Item 1</a>
							<a href="#" class="dropdown-item">Dropdown Item 2</a>
							<a href="#" class="dropdown-item">Dropdown Item 3</a>
						</div> -->
					</li>
					<li class="dropdown">
						<a href="{{ route('contact') }}" class="nav-item nav-link  navfonts"style="font-size: 1rem;">Contact Us</a>
						<div class="dropdown-menu">
							<!-- <a href="#" class="dropdown-item">Dropdown Item 1</a>
							<a href="#" class="dropdown-item">Dropdown Item 2</a>
							<a href="#" class="dropdown-item">Dropdown Item 3</a>
							<a href="#" class="dropdown-item">Dropdown Item 4</a>
							<a href="#" class="dropdown-item">Dropdown Item 5</a> -->
						</div>
					</li>
					<!-- <li><a href="views/login.php" class="nav-item nav-link  navfonts"style="font-size: 18px;">Login</a> -->
                    @if (Route::has('login'))
                <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                    @auth
                        <a href="{{ url('/home') }}"  class="nav-item nav-link navfonts" style="font-size:1rem;"><i class="fas fa-home"></i> Home</a>
                    @else
					  <a href="{{ route('login') }}" class="nav-item nav-link navfonts" style="font-size: 1rem;">  Login </a>

                        @if (Route::has('register'))
						<a href="{{ route('register') }}" class="nav-item nav-link navfonts"style="font-size: 1rem;"> Register</a>
                        @endif
                    @endauth
                <!-- </div> -->
               
            @endif
                   </li>
					<!-- <li><a href="views/register.php" class="nav-item nav-link  navfonts"style="font-size: 18px;">Register</a></li> -->
				</ul>
			</div>
		</div>
	</nav>

	</section>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">    
            <img class="carousel-image"  style="height:500px; width:100%; " src="{{asset('image/delivery-c-new.jpg')}}" alt="First slide">
            <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Swappee</span>
            </h1>
          
            <h3 style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700">Cash Less Transactions for Swap!</h3>
            <a class="btn btn-primary" href="{{ route('register') }}" role="button" style="margin-bottom:5px;">Sign-up Now!</a>
             <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;">Swapping will make you fell better. </p>
      </div>
    </div>
    <div class="carousel-item ">
      <img class="carousel-image" style="height:500px; width:100%;"  src="{{asset('image/new-swap-c.jpg')}}" alt="Second slide">
      <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Deliver</span>
            </h1>
            <h3 style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700">Cash Less Transactions for Swap!</h3>
            <a class="btn btn-primary" href="views/register.php" role="button" style="margin-bottom:5px;">Sign-up Now!</a>
             <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;">We deliver your package with love. </p>

      </div>
    
    </div>
    <div class="carousel-item ">
      <img class="carousel-image"  style="height:500px; width:100%;" src="{{asset('image/bidding new.jpg')}}" alt="Third slide">
      <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Auction</span>
            </h1>
             <h3  style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700">Cash Less Transactions for Swap!</h3>
             <a class="btn btn-primary" href="views/register.php" role="button" style="margin-bottom:5px;">Sign-up Now!</a>
             <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;">Our auction is fair and competitive, enter at your own risk. </p>

      </div>
     
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
</div>

@yield('content')

<footer class="footer-distributed">

<div class="footer-left">

  <h3>Swappee<span style="color: #FFB52E;">.com</span></h3>

  <p class="footer-links">
    <a href="index.php" class="link-1">Home</a>
    
    <a href="#">Blog</a>
  
    <a href="{{ route('policy') }}">Privacy & Policy</a>
  
    <a href="about.php">About</a>
    
    <a href="{{ route('terms_condition') }}">Terms & Conditions</a>
    
    <a href="{{ route('contact') }}">Contact</a>
  </p>

  <p class="footer-company-name" style="color: #FFB52E;">Swappee © 2021</p>
</div>

<div class="footer-center">

  <div>
    <i class="fa fa-map-marker" style="font-size: 15px;"></i>
    <p><span>University of Caloocan City</span> Congress Campus, Philippines</p>
  </div>

  <div>
    <i class="fa fa-phone" style="font-size: 15px;color:"></i>
    <p>+63-4617-99654</p>
  </div>

  <div>
    <i class="fa fa-envelope" style="font-size: 15px;"></i>
    <p><a href="mailto:support@company.com" style="color: #FFB52E;">Swappee.com</a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span>About the company</span>
    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
  </p>

  <div class="footer-icons">

    <a href="#"><i class="fab fa-facebook-f" style="color: #3B5998; background-color:none;"></i></a>
    <a href="#"><i class="fab fa-twitter" style="color: #55ACEE; background-color:none;"></i></a>
    <a href="#"><i class="fab fa-instagram" style="color:#dd4b39; background-color:none;"></i></a>
    

  </div>

</div>

</footer>
<script src="{{asset('js/index.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- <script src="{{asset('js/index.js')}}"></script> -->
  
</body>
</html>