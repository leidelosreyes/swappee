<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Swappee</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
     <link rel="icon"  href="image/swappee_favincon.jpg" type="image/jpg">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">


    

    <!-- Styles -->
    
    
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <!-- <link href="{{ asset('css/index.css') }}" rel="stylesheet"> -->
</head>
<body>
<!-- <section class="back">
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
        
            
            </div>
    </div>
</section> -->
<!-- navbar for web view  -->

<div class="d-none d-lg-block">
	<nav class="navbar navbar-light bg-light mb-2">
		<div class="container">
			<a class="navbar-brand"  href="{{url('/')}}">
			<img src="{{asset('image/swappee_logo.png')}}" style="width:150px;height: 50px;margin-bottom: 5px;" alt="">
			</a>
				<ul class="nav justify-content-end">
				 
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
	              <!-- <div class="mb-4 col-xl-12">
				      <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input type="search" name="search" class="form-control searchTerm" placeholder="What are you looking for?">
						<button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					  </form>
					</button>
                  </div> -->
		</div>	
	</nav>
</div>

<!-- end nav web view -->

<!-- navbar for mobile view  -->

<div class="d-sm-block d-md-none mb-4">
<nav class="navbar navbar-light bg-light mb-2">
		<div class="container">
			<a class="navbar-brand"  href="{{url('/')}}">
			<img src="{{asset('image/swappee_logo.png')}}" style="width:150px;height: 50px;margin-bottom: 5px;" alt="">
			</a>
				<ul class="nav justify-content-end">
				  
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
	              <!-- <div class="mb-4 col-xl-12">
				      <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input type="search" name="search" class="form-control searchTerm" placeholder="What are you looking for?">
						<button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					  </form>
					</button>
                   </div> -->
		</div>	
	</nav>
</div>

<!-- end nav mobile view -->	
    <div id="app">
       

        <main>
            @yield('content')
        </main>
    </div>

   
    <script>
         function geolocate() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              };
              var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
              });
              Address.setBounds(circle.getBounds());
            });
          }

        }
          function initAutocomplete() {
              Address = new
                      google.maps.places.Autocomplete(
                              /** @type {!HTMLInputElement}

                               */(document.getElementById('address')),
                              {types: ['geocode'], componentRestrictions: {country: 'Ph'}});

              Address.addListener('place_changed', fillInAddress);
          }
          function fillInAddress() {
            var place = Address.getPlace();
            console.log(place);
          document.getElementById('latitude').value = place.geometry.location.lat();
          document.getElementById('longitude').value = place.geometry.location.lng();
        }
    
    </script>
     <script src="https://maps.googleapis.com/maps/api/js?input=Philippines&types=geocode&key=AIzaSyBJCSjFGcsFkG5Zy7k3Ph6ArHv6EoWSxpk&libraries=places&callback=initAutocomplete"async defer></script>
</body>
</html>
