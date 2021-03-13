<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Swappee') }}</title>

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
<section class="back">
    <div class="container cons">
        <div class="row top-bar" id="main">
            <div class="col">
                <span class="">
                <i class="fab fa-facebook-f" style="color: #3B5998;"></i>
                </span>
               
                <span class="">
				<i class="fab fa-twitter" style="color: #55ACEE;"></i>
				</span>
				
				<span class="">
				<i class="fab fa-instagram" style="color:#dd4b39;"></i>
				</span>
                
                
             </div>
           
             <div class="col text-right">
               
                <span class="">
                @guest
                            @if (Route::has('login'))
                                
                              <a  href="{{ route('login') }}"> <i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</a>
                                     
                        
                            
                            @endif
                            
                         
                </span>

                <span class="">
                    |
                </span>

                <span class="text-white">
                @if (Route::has('register'))
                               
                               <a  href="{{ route('register') }}"><i class="fas fa-user-plus"></i> {{ __('Register') }}</a>
                           
                       @endif
                </span>
              
                @endguest         
            </div>
    </div>
</section>
    <div id="app">
       

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
