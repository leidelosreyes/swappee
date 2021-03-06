<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('image/swap_trans.png') }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
   <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick/slick.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick/slick-theme.css')}}">
   <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
 
  <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
    <script src="{{asset('js/jquery.js')}}"></script>
  
</head>
<body>

	<!-- navbar for web view  -->

<div class="d-none d-lg-block">
	<nav class="navbar navbar-light bg-light mb-2">
		<div class="container">
			<a class="navbar-brand"  href="{{url('/')}}">
			<img src="{{asset('image/swappee_logo.png')}}" style="width:150px;height: 50px;margin-bottom: 5px;" alt="">
			</a>
				<ul class="nav justify-content-end">
				  <li class="nav-item">
					<a class="nav-link " style="color: #57585a;" href="{{route('posts.create')}}"><i class="fas fa-plus padding-right"></i> Add an Item</a>
					</li>
					<!-- <li class="nav-item">
					<a class="nav-link" style="color: #57585a;" href="#"><i class="far fa-bookmark"></i> Watchlist</a>
					</li> -->
				
					@if (Route::has('login'))
          <li class="nav-item">
                    @auth
                        <a href="{{ url('/home') }}"  class="nav-item nav-link navfonts" style="color: #57585a;"><i class="fas fa-home"></i></a>
                    @else
					             <a href="{{ route('login') }}" class="nav-item nav-link navfonts" style="color: #57585a;"> Login |</a>
            </li>
                        <!-- @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="nav-item nav-link navfonts"style="color: #57585a;">Register</a>
                        @endif -->
                    @endauth
                
               
                    @endif
				

				</ul>
	              <div class="mb-4 col-xl-12">
				      <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input type="search" name="search" class="form-control searchTerm" placeholder="What are you looking for?">
						<button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					  </form>
					</button>
         </div>
		</div>	
	</nav>
</div>

<!-- end nav web view -->

<!-- navbar for mobile view  -->

<div class="d-sm-block d-md-none mb-4">
<nav class="navbar navbar-light bg-light mb-2">
		<div class="container">
			<a class="navbar-brand"  href="{{url('/')}}">
			<img src="{{asset('image/swappee_logo.png')}}" style="width:130px;height: 45px;margin-bottom: 5px;" alt="">
			</a>
				<ul class="nav justify-content-end">
				  <!-- <li class="nav-item">
					<a class="nav-link " style="color: #57585a;" href="{{route('posts.create')}}"><i class="fas fa-plus padding-right"></i></a>
					</li> -->
					<!-- <li class="nav-item">
					<a class="nav-link" style="color: #57585a;" href="#"><i class="far fa-bookmark"></i> Watchlist</a>
					</li> -->
				
					@if (Route::has('login'))
          <li class="nav-item">
                    @auth
                        <a href="{{ url('/home') }}"  class="nav-item nav-link navfonts" style="color: #57585a;"><i class="fas fa-home"></i></a>
                    @else
					             <a href="{{ route('login') }}" class="nav-item nav-link navfonts" style="color: #57585a;"> Login |</a>
            </li>
                        @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="nav-item nav-link navfonts"style="color: #57585a;">Register</a>
                        @endif
                    @endauth
                
               
                    @endif
				

				</ul>
	             
		</div>	
	</nav>
  <div class="mb-4 col-xl-12">
				      <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input type="search" name="search" class="form-control searchTerm" placeholder="What are you looking for?">
						<button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					  </form>
					</button>
         </div>
</div>

<!-- end nav mobile view -->	

		
  

	

@yield('content')

@include('layouts.footer')
<!-- <script src="{{asset('js/index.js')}}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- Script for TEXTAREA -->
<script src="https://cdn.tiny.cloud/1/d5z57kxjuvf3qb1pxqwp575nkn5dp86srz52ip6w742ozfjo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- <script src="{{asset('js/index.js')}}"></script> -->
    <script type="text/javascript">
    $('.slickSlider').slick({
      autoplay: true,
  autoplaySpeed: 2000,
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 7,
  slidesToScroll: 5,
  // prevArrow: null,
  // nextArrow: null,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    }
   
  ]
});

</script>

<script>
      tinymce.init({
        selector:'#description',
         plugins: 'lists',
         toolbar: 'bullist',
         plugins: 'paste',
         height: 300,
         branding: false,
         width: "100%"
        
      })
      tinymce.init({
        selector:'#message',
         plugins: 'lists',
         toolbar: 'bullist',
         plugins: 'paste',
         branding: false,
         height: 300,
         width: "100%"
        
      })
      
</script>
  
</body>
</html>