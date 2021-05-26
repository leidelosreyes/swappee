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
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
   <!-- Add the slick-theme.css if you want default styling -->
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
   <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick/slick.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick/slick-theme.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    
  
</head>
<body>


		
<!-- header navigation -->
    
          
<!-- navbar for web view  -->

<div class="d-none d-lg-block">
	<nav class="navbar navbar-light bg-light mb-2">
		<div class="container">
			<a class="navbar-brand"  href="{{url('/')}}">
			<img src="{{asset('image/swappee_logo.png')}}" style="width:150px;height: 50px;margin-bottom: 5px;" alt="">
			</a>
				<ul class="nav justify-content-end">
				    <li class="nav-item">
					<a class="nav-link " style="color: #57585a;" href="{{route('home')}}"><i class="fas fa-home"></i> Home</a>
					</li>
					<li class="nav-link">
					<div class="dropdown">
                                @if($notifications->count()== 0)
                                <a class="dropdown-toggle"style="color: #57585a;" class="nav-link "
                                    d="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    ><i class="far fa-bell"></i>&nbspNotifications</a> 
                                @else
								  
                                    <a class="dropdown-toggle badge1" data-badge="{{$notifications->count()}}" style="color: #57585a;"
                                    d="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    ><i class="far fa-bell"></i>&nbspNotifications</a> 
                                @endif
                               
                         <!-- notification -->
                         <div class="inbox-widget"> 
                         
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                           <div class="card-body">
                                    <h5>Notifications</h5>
                                    
                        </div>
                             @foreach($notifications as $notification)
                               <a class="dropdown-item" href="{{route('show.notifications')}}"> 
                               <img src="{{$notification->sender->avatar}}" class="card-avatar"/> 
                               <b>{{$notification->sender->name}}</b>
                               Wants to swap your item
                               <!-- <p style="margin-left:50px;"><i class="far fa-clock" style="color:green"></i> {{$notification->created_at->diffForHumans()}}</p> -->
                             
                               
                               </a>   
							                
                             @endforeach
                           

                             <footer>
                                <div class="card-body">
                                    <a href=""><p style="text-align:center;">See all Notifications</p></a>
                                </div>
                             </footer>                        
                             </div>
                        </div>
                        <!-- end notification -->
                        
					</li>
				    <li class="nav-item">
					<a class="nav-link " style="color: #57585a;" href="{{route('posts.create')}}"><i class="fas fa-plus padding-right"></i> Add an Item</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" style="color: #57585a;" href="{{route('auctions.index')}}"><i class="fas fa-gavel"></i> Auction</a>
					</li>
					<li class="dropdown">
						<a href="" class="nav-item nav-link  navfonts" data-toggle="dropdown" style="color: #57585a;" ><i class="far fa-user-circle"></i> {{ Auth::user()->name }}</a>
						<div class="dropdown-menu">
							<a href="{{route('user.profile')}}" style="font-size: .80rem;" class="dropdown-item"><i class="fas fa-user"></i> Acount</a>
                            <!-- <a href="{{route('user.profile_public_view')}}" style="font-size: .80rem;" class="dropdown-item"><i class="fas fa-globe-asia"></i> Public Profile</a> -->
							<a class="dropdown-item navfonts" href="{{ route('home') }}" style="font-size: .80rem;"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                 <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                         </form>
						
						</div>
					</li>

				</ul>
	              <div class="mb-4 col-xl-12">
				      <form class="d-flex"  action="{{route('auctions.search')}}" method="GET">
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

<div class="d-sm-block d-md-none">
<nav id="navbar_top" class="navbar navbar-light bg-light mb-2 navbar-fixed-top">
		<div class="container">
			<a class="navbar-brand"  href="{{url('/')}}">
			<img src="{{asset('image/swappee_logo.png')}}" style="width:120px;height: 45px;margin-bottom: 5px;" alt="">
			</a>  
				
				
				@include('User.sidemodal')
					
		</div>	
		<div class="mb-2 col-xl-12">
				      <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input type="search" name="search" class="form-control searchTerm" placeholder="What are you looking for?">
						<button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					  </form>
					</button>
                </div>
	   
	</nav>
	
	   
 <!-- Modal -->
		<div class="modal fade" id="exampleModal-notifcation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document" >
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Notifications</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
							<div class="modal-body">
							@foreach($notifications as $notification)
						        <div class="d-flex">

								</div>
                               <a style="color: #57585a;"href="{{route('show.notifications')}}"> 
							   @if(empty($notification->sender->avatar))
							   <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
							   @else
							   <img src="{{$notification->sender->avatar}}" class="card-avatar"/> 
							   @endif 
                               <b>{{$notification->sender->name}}</b>	
                               Wants to swap your items 
                               </a> 
							                     
                             @endforeach
							</div>
						<div class="modal-footer">
						
					</div>
				</div>
			</div>
		</div>  
<!-- end modal -->
</div>

<!-- end nav mobile view -->
<!-- end navigation -->

@yield('content')

@include('layouts.footer')
@include('home-script.script-file')
</body>
</html>