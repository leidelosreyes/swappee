<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swappee</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
   <!-- Add the slick-theme.css if you want default styling -->
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
   <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick/slick.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick/slick-theme.css')}}">
   
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="{{asset('js/jquery.js')}}"></script>
  
</head>
<body>
<section class="back">
			<div class="container cons">
				<div class="row top-bar" id="main">
					<div class="col">
						
          <span class="">
					<a style="color:white;"> Swappee@gmail.com</a>
					</span>
					
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
			<a href="{{url('/')}}" class="navbar-brand logo-nav"><img src="{{asset('image/swappee_logo.png')}}" style="width:150px;height: 50px;margin-bottom: 5px;" alt=""></a>
			
			<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
			</button>
			
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="{{route('home')}}"  class="nav-item nav-link active navfonts" style="font-size: 1rem;">Home</a></li>
					<li><a href="" class="nav-item nav-link  navfonts" style="font-size: 1rem;">About Us</a></li>
					<li class="dropdown">
						<!-- <a href="auction.php" class="nav-item nav-link  navfonts"  data-toggle="dropdown"style="font-size: 18px;">Auction</a> -->
						<!-- <div class="dropdown-menu">
							<a href="#" class="dropdown-item">Dropdown Item 1</a>
							<a href="#" class="dropdown-item">Dropdown Item 2</a>
							<a href="#" class="dropdown-item">Dropdown Item 3</a>
						</div> -->
					</li>
					<li><a href="{{route('contact')}}" class="nav-item nav-link  navfonts" style="font-size: 1rem;">Contact Us</a></li>
                    <li class="dropdown">
						<a href="" class="nav-item nav-link  navfonts" data-toggle="dropdown" style="font-size: 1rem;" > {{ Auth::user()->name }}</a>
						<div class="dropdown-menu">
							<a href="{{route('user.profile')}}" style="font-size: .80rem;" class="dropdown-item"><i class="fas fa-user"></i> Profile</a>
							<a class="dropdown-item navfonts" href="{{ route('index') }}" style="font-size: .80rem;"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                 <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                         </form>
						
						</div>
					</li>


                   
</div>
</li>
					<!-- <li><a href="views/register.php" class="nav-item nav-link  navfonts"style="font-size: 18px;">Register</a></li> -->
				</ul>
			</div>
		</div>
	</nav>

	</section>

  <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">    
            <img class="carousel-image" style="height:500px; width:100%; " src="{{asset('image/delivery-c-new.jpg')}}" alt="First slide">
            <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Swappee</span>
            </h1>
          
            <h3 style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700">Cash Less Transactions for Swap!</h3>
          
             <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box" type="search" name="search" placeholder="Search" aria-label="Search">

   					    </form>
             <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;margin-top: 15px;">Swapping will make you fell better. </p>
      </div>
    </div>
    <div class="carousel-item ">
      <img class="carousel-image" style="height:500px; width:100%; " src="{{asset('image/new-swap-c.jpg')}}" alt="Second slide">
      <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Deliver</span>
            </h1>
            <h3 style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700;margin-top: 15px;">Cash Less Transactions for Swap!</h3>
            <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box" type="search" name="search" placeholder="Search" aria-label="Search">

   					    </form>
           
             <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;margin-top: 15px;">We deliver your package with love. </p>

      </div>
    
    </div>
    <div class="carousel-item ">
      <img class="carousel-image" style="height:500px; width:100%; " src="{{asset('image/bidding new.jpg')}}" alt="Third slide">
      <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Auction</span>
            </h1>
             <h3  style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700">Cash Less Transactions for Swap!</h3>
             
             <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box" type="search" name="search" placeholder="Search" aria-label="Search">

   					    </form>

             <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;margin-top: 15px;">Our auction is fair and competitive, enter at your own risk. </p>

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

<div class="footer-left container">

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
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('js/zoom-image.js')}}"></script>
	<script src="{{asset('js/zoom-main.js')}}"></script>
  <script src="{{asset('js/location.js')}}"></script>
  <script src="{{asset('js/slider.js')}}"></script>

	<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCgx9Bd4uEQheMNgrbi-r6Zbg1spXEgof8"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?input=Philippines&types=geocode&key=AIzaSyBJCSjFGcsFkG5Zy7k3Ph6ArHv6EoWSxpk&libraries=places&callback=initAutocomplete"async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- <script src="{{asset('js/index.js')}}"></script> -->

 <!-- textarea api -->
 <script src="https://cdn.tiny.cloud/1/d5z57kxjuvf3qb1pxqwp575nkn5dp86srz52ip6w742ozfjo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
      tinymce.init({
        selector:'#description',
         plugins: 'lists',
         toolbar: 'bullist',
         plugins: 'paste',
         height: 400,
         width: "100%"
        
      })
      
</script>
<script type="text/javascript">
    $('.slickSlider').slick({
  autoplay: true,
  autoplaySpeed: 2000,
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 7,
  slidesToScroll: 5,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    }
   
  ]
});

</script>

</body>
</html>