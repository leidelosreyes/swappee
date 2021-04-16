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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
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
         branding: false,
         width: "100%"
        
      })
      tinymce.init({
        selector:'#message',
         plugins: 'lists',
         toolbar: 'bullist',
         plugins: 'paste',
         branding: false,
         height: 200,
         width: "100%"
        
      })
      
</script>
<script>
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
      <script>
        var slider = new Slider("#ex6");
        $('.slider-selection').css('background', '#FFB52E'); 
        $('.slider-handle').css('background', '#FFB52E');   
        slider.on("slide", function(sliderValue) {
          document.getElementById("ex6SliderVal").textContent = sliderValue;
        });
      </script>
</body>
</html>