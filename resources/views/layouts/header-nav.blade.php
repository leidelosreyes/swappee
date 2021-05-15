
          
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
                            <a href="{{route('user.profile_public_view')}}" style="font-size: .80rem;" class="dropdown-item"><i class="fas fa-globe-asia"></i> Public Profile</a>
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
		<div class="container d-block">


		  <div class="row">
   			 <div class="col-10 pt-1">
				<form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box_category" type="search" name="search" placeholder="Search your offers" aria-label="Search">
   				</form>
   			 </div>
    		 <div class="col">
			 	<ul class="nav justify-content-end">
				    

					<li class="nav-item">
				     	@include('User.sidemodal')
					</li>

				 </ul>
    		</div>
  		</div>
	              
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