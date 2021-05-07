<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }} | Admin</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="shortcut icon" href="{{ asset('image/swap_trans.png') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">


    

    <!-- Styles -->
    
    
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <!-- <link href="{{ asset('css/index.css') }}" rel="stylesheet"> -->
</head>
 
<body>

<!--Web navbar for web view  -->
<div class="d-none d-lg-block">
	<nav class="navbar navbar-light bg-light mb-2">
		<div class="container" >
         <div class="row">
            <div class="col p-0">
             <a class="nav-link" style="color: #57585a; font-size:20px;"data-toggle="modal" style=""data-target="#exampleModal1"><p> <i class="fas fa-bars pt-2"></i></p></a>
            </div>
            <div class="col p-0">
             <img src="{{asset('image/swappee_logo.png')}}" style="width:150px;height: 50px;margin-bottom: 5px;" alt="">
            </div>
        </div>
			
			<!-- <img src="{{asset('image/swappee_logo.png')}}" style="width:150px;height: 50px;margin-bottom: 5px;" alt=""> -->
                        
            

        
    
            <!-- modal -->
                    <div class="modal left fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    
                                        @if(empty($post->user->avatar))
                                            <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                                        @else
                                            <img src="{{$post->user->avatar}}" class="card-avatar"/>
                                        @endif
                                            <p class="mt-2 ml-2">{{ Auth::user()->name }}</p>
                                            
                                    
                                            
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <div class="d-flex">
                                        <p class="mt-2 ml-2">Role: {{ Auth::user()->usertype }}</p>
                                        <p class="mt-2 ml-2"> Active <i class="fas fa-circle" style="color:green; font-size:8px;"></i></p>
                                    </div>
                                <hr>
                                
                                <div class="modal-body text-left">
                                      <!-- side menu -->
                                           
                                                <ul  style="list-style-type:none;"> 
                                              
                                                <li>    
                                                        <a href="#homeSubmenu1" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-user pr-2"></i>Administrator<i class="fas fa-chevron-right" style="float:right"></i></a> 
                                                            <ul class="collapse list-unstyled" id="homeSubmenu1">
                                                                <div class="pl-2">
                                                                        <li>
                                                                            <a href="{{route('create.admin')}}"class="a-color">Create Administrator </a>
                                                                         </li>
                                                                        <li>
                                                                            <a href="{{route('show.admin',1)}}"class="a-color">Admin</a>                     
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{route('show.admin',2)}}"class="a-color">Post Moderator Admin</a>                     
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{route('show.admin',3)}}"class="a-color">Contents Manager Admin</a>                     
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{route('show.admin',4)}}"class="a-color">User Manager Admin</a>                     
                                                                        </li>
                                                                </div>
                                                                    <hr>
                                                                
                                                            </ul>   
                                                    </li> 
                                                    <li>    
                                                        <a href="#homeSubmenu2" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-clipboard pr-2"></i> Post<i class="fas fa-chevron-right" style="float:right"></i></a> 
                                                            <ul class="collapse list-unstyled" id="homeSubmenu2">
                                                                <div class="pl-2">
                                                                <li>
                                                                            <a href="{{route('show_swap.admin')}}"class="a-color"><i class="fas fa-sync-alt pr-2"  style="font-size:11px;"></i>Swap </a>
                                                                    </li>
                                                                        <li>
                                                                            <a href="{{route('show_auction.admin')}}"class="a-color"><i class="fas fa-gavel pr-2" style="font-size:11px;"></i>Auction</a>                     
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-trophy pr-2" style="font-size:11px;"></i>Winner's</a>                     
                                                                        </li>
                                                                        
                                                                </div>
                                                                    <hr>
                                                                
                                                            </ul>   
                                                    </li>      
                                                    <li>    
                                                        <a href="#homeSubmenu3" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-list pr-2"></i>Categories
                                                        <i class="fas fa-chevron-right" style="float:right"></i></a> 
                                                            <ul class="collapse list-unstyled" id="homeSubmenu3">
                                                                <div class="pl-2">
                                                                        <li>
                                                                            <a href="{{route('create_categories.admin')}}"class="a-color"><i class="fas fa-eye pr-2" style="font-size:11px;"></i>Create Categories </a>
                                                                    </li>
                                                                        <li>
                                                                            <a href="{{route('create_sub_categories.admin')}}"class="a-color"><i class="fas fa-eye pr-2" style="font-size:11px;"></i>Create Sub Categories</a>                     
                                                                    </li>
                                                                </div>
                                                                    <hr>
                                                                
                                                            </ul>   
                                                    </li>        
                                                    <li>    
                                                        <a href="#homeSubmenu4" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-users pr-2"></i>Users
                                                        <i class="fas fa-chevron-right" style="float:right"></i></a> 
                                                            <ul class="collapse list-unstyled" id="homeSubmenu4">
                                                                <div class="pl-2">
                                                                        <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-check pr-2" style="font-size:11px;"></i>Create Users</a>
                                                                    </li>
                                                                        <li>
                                                                            <a href="{{route('show_user.admin','verified')}}"class="a-color"><i class="fas fa-eye pr-2" style="font-size:11px;"></i>Verified User</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="{{route('show_user.admin','not-verified')}}"class="a-color"><i class="fas fa-eye pr-2" style="font-size:11px;"></i>Not Verified User</a>                     
                                                                    </li>
                                                                </div>
                                                                
                                                                
                                                            </ul>   
                                                    </li>  
                                                    <!-- <li>
                                                        <a href="{{route('show.notifications')}}"class="a-color badge1" data-badge="2"><i class="far fa-bell"></i> Notifications</a> 
                                                    </li> -->
                                                    <hr>
                                                    <li>    
                                                        <a href="#homeSubmenu5" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-trash-alt pr-2"></i>Trash
                                                        <i class="fas fa-chevron-right" style="float:right"></i></a> 
                                                            <ul class="collapse list-unstyled" id="homeSubmenu5">
                                                                <div class="pl-2">
                                                                        <li>
                                                                            <a href="{{route('archive.admin','auctions_deleted')}}"class="a-color"><i class="fas fa-sync-alt pr-3"></i>Auction Item</a>
                                                                    </li>
                                                                    <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-list-ol pr-3"></i>Categories</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-envelope pr-3"></i>Messages</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-hand-holding-heart pr-3"></i> Offers</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="{{route('archive.admin','posts_deleted')}}"class="a-color"><i class="fas fa-sync-alt pr-3"></i>Swap Item</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="#"class="a-color"><i class="far fa-list-alt pr-3"></i>Sub Categories</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="{{route('archive.admin','admins_deleted')}}"class="a-color"><i class="fas fa-users pr-3"></i>Users</a>                     
                                                                    </li>
                                                                </div>
                                                                
                                                                
                                                            </ul>   
                                                    </li>  
                                                    <li>
                                                        <a href="#"class="a-color"><i class="fas fa-hand-holding-heart"></i> Offered <span style="float:right;">
                                                        </span>
                                                        </a> 
                                                    </li>
                                                    <a href="#"class="a-color"><i class="fas fa-edit"></i> Activity Log <span style="float:right;">
                                                    </span>
                                                    </a> 
                                                    </li>
        
        
                                                    <hr>
                                                    <li>
                                                            <a class="a-color" href="{{ route('index') }}" style="font-size: .80rem;"
                                                                onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                                                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                                            </a>
        
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                                </form>
                                                    
                                                    </li>
                                                    
                                                    </ul>
                                               
                                    <!-- end side menu -->
                                   
                                </div>
                                <div class="modal-footer">
                                <p style="color: gray; text-align:center;">Swappee.online © <?php echo date("Y"); ?> Copyright.</p>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- end modal -->         
			</a>


            
				<ul class="nav justify-content-end"> 
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:black;">
                  {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('index') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
				

				</ul>
		</div>	
	</nav>
</div>
<!-- End navbar for web view  -->

<!-- Mobile navbar for web view  -->
<div class="d-sm-block d-md-none">
	<nav class="navbar navbar-light bg-light">
		<div class="container" >
         <div class="row ml-0">
            <div class="col p-0">
             <a class="nav-link" style="color: #57585a; font-size:20px;"data-toggle="modal" style=""data-target="#exampleModal2"><p> <i class="fas fa-bars pt-2" style="font-size:1rem;"></i></p></a>
            </div>
            <div class="col p-0">
             <img src="{{asset('image/swappee_logo.png')}}" style="width: 7rem;margin-top: 5px;" alt="">
            </div>
        </div>
			
			<!-- <img src="{{asset('image/swappee_logo.png')}}" style="width:150px;height: 50px;margin-bottom: 5px;" alt=""> -->
                        
            

        
    
            <!-- modal -->
                    <div class="modal left fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                        @if(empty($post->user->avatar))
                                            <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                                        @else
                                            <img src="{{$post->user->avatar}}" class="card-avatar"/>
                                        @endif
                                            <p class="mt-2 ml-2">{{ Auth::user()->name }}</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="d-flex">
                                        <p class="mt-2 ml-2">Role: {{ Auth::user()->usertype }}</p>
                                        <p class="mt-2 ml-2"> Active <i class="fas fa-circle" style="color:green; font-size:8px;"></i></p>
                                    </div>
                                <hr>
                                <div class="modal-body text-left">
                                      <!-- side menu -->
                                           
                                                <ul  style="list-style-type:none;"> 
                                              
                                                <li>    
                                                        <a href="#homeSubmenu1" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-user pr-2"></i>Administrator<i class="fas fa-chevron-right" style="float:right"></i></a> 
                                                            <ul class="collapse list-unstyled" id="homeSubmenu1">
                                                                <div class="pl-2">
                                                                        <li>
                                                                            <a href="#"class="a-color">Create Administrator </a>
                                                                         </li>
                                                                        <li>
                                                                            <a href="#"class="a-color">Admin</a>                     
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"class="a-color">Post Moderator Admin</a>                     
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"class="a-color">Contents Manager Admin</a>                     
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"class="a-color">User Manager Admin</a>                     
                                                                        </li>
                                                                </div>
                                                                    <hr>
                                                                
                                                            </ul>   
                                                    </li> 
                                                    <li>    
                                                        <a href="#homeSubmenu2" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-clipboard pr-2"></i> Post<i class="fas fa-chevron-right" style="float:right"></i></a> 
                                                            <ul class="collapse list-unstyled" id="homeSubmenu2">
                                                                <div class="pl-2">
                                                                        <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-sync-alt pr-2"  style="font-size:11px;"></i>Swap </a>
                                                                    </li>
                                                                        <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-gavel pr-2" style="font-size:11px;"></i>Auction</a>                     
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-trophy pr-2" style="font-size:11px;"></i>Winner's</a>                     
                                                                        </li>
                                                                        
                                                                </div>
                                                                    <hr>
                                                                
                                                            </ul>   
                                                    </li>      
                                                    <li>    
                                                        <a href="#homeSubmenu3" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-list pr-2"></i>Categories
                                                        <i class="fas fa-chevron-right" style="float:right"></i></a> 
                                                            <ul class="collapse list-unstyled" id="homeSubmenu3">
                                                                <div class="pl-2">
                                                                        <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-eye pr-2" style="font-size:11px;"></i>Create Categories </a>
                                                                    </li>
                                                                        <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-eye pr-2" style="font-size:11px;"></i>Create Sub Categories</a>                     
                                                                    </li>
                                                                </div>
                                                                    <hr>
                                                                
                                                            </ul>   
                                                    </li>        
                                                    <li>    
                                                        <a href="#homeSubmenu4" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-users pr-2"></i>Users
                                                        <i class="fas fa-chevron-right" style="float:right"></i></a> 
                                                            <ul class="collapse list-unstyled" id="homeSubmenu4">
                                                                <div class="pl-2">
                                                                        <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-check pr-2" style="font-size:11px;"></i>Create Users</a>
                                                                    </li>
                                                                        <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-eye pr-2" style="font-size:11px;"></i>Verified User</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-eye pr-2" style="font-size:11px;"></i>Not Verified User</a>                     
                                                                    </li>
                                                                </div>
                                                                
                                                                
                                                            </ul>   
                                                    </li>  
                                                    <!-- <li>
                                                        <a href="{{route('show.notifications')}}"class="a-color badge1" data-badge="2"><i class="far fa-bell"></i> Notifications</a> 
                                                    </li> -->
                                                    <hr>
                                                    <li>    
                                                        <a href="#homeSubmenu5" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-trash-alt pr-2"></i>Trash
                                                        <i class="fas fa-chevron-right" style="float:right"></i></a> 
                                                            <ul class="collapse list-unstyled" id="homeSubmenu5">
                                                                <div class="pl-2">
                                                                        <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-sync-alt pr-3"></i>Auction Item</a>
                                                                    </li>
                                                                    <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-list-ol pr-3"></i>Categories</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-envelope pr-3"></i>Messages</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-hand-holding-heart pr-3"></i> Offers</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-address-card pr-3"></i>Swap Item</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="#"class="a-color"><i class="far fa-list-alt pr-3"></i>Sub Categories</a>                     
                                                                    </li>
                                                                    <li>
                                                                            <a href="#"class="a-color"><i class="fas fa-users pr-3"></i>Users</a>                     
                                                                    </li>
                                                                </div>
                                                                
                                                                
                                                            </ul>   
                                                    </li>  
                                                    <li>
                                                        <a href="#"class="a-color"><i class="fas fa-hand-holding-heart"></i> Offered <span style="float:right;">
                                                        </span>
                                                        </a> 
                                                    </li>
                                                    <a href="#"class="a-color"><i class="fas fa-edit"></i> Activity Log  <span style="float:right;">
                                                    </span>
                                                    </a> 
                                                    </li>
        
        
                                                    <hr>
                                                    <li>
                                                            <a class="a-color" href="{{ route('index') }}" style="font-size: .80rem;"
                                                                onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                                                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                                            </a>
        
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                                </form>
                                                    
                                                    </li>
                                                    
                                                    </ul>
                                               
                                    <!-- end side menu -->
                                   
                                </div>
                                <div class="modal-footer">
                                 <p style="color: gray; text-align:center;">Swappee.online © <?php echo date("Y"); ?> Copyright.</p>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- end modal -->
			</a>


            
				<ul class="nav justify-content-end"> 
                <li class="nav-item dropdown">
                <i id="navbarDropdown" class="fas fa-user nav-link dropdown-toggle"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:gray;"></i>
               
                  
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('index') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
				

				</ul>
		</div>	
	</nav>
</div>

<!-- End navbar for mobile view  -->

<div>
@yield('content')
</div>

</body>
</html>
