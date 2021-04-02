<div class="row">
            <div class="col-sm-12">
          
                <!-- meta -->
                <div class="profile-user-box card-box bg-custom">
                    <div class="row">
                    @if(empty(Auth::user()->avatar))
                    <div class="col-sm-6"><span class="float-left mr-3"><img src="{{asset('image/user_icon.png')}}" alt="" class="thumb-lg rounded-circle"></span>
                    @else
                    <div class="col-sm-6"><span class="float-left mr-3"><img src="{{Auth::user()->avatar}}" alt="" class="thumb-lg rounded-circle"></span>
                    @endif
                      
                            <div class="media-body text-white">
                                <a href="{{route('user.profile')}}" style="color:white;"><h4 class="mt-4 mb-1 font-18">{{Auth::user()->name}}</h4></a>
                               
                                <p class="text-light mb-0"><i class="fas fa-envelope"></i> {{Auth::user()->email}}</p>
                                <div class="dropdown">
                                @if($notifications->count()== 0)
                                <a class="dropdown-toggle" style="color:white;"
                                    d="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    ><i class="far fa-bell"></i>&nbspNotifications</a> 
                                @else
                                    <a class="dropdown-toggle badge1" data-badge="{{$notifications->count()}}" style="color:white;"
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
                               <div style="margin-left:90px;">
                                    <a href="" class="btn btn-primary ml-4 btn-sm">Accept</a>
                                    <a href="" class="btn btn-secondary btn-sm">Decline</a>
                               </div>                      
                             @endforeach
                           

                             <footer>
                                <div class="card-body">
                                    <a href=""><p style="text-align:center;">See all Notifications</p></a>
                                </div>
                             </footer>                        
                             </div>
                        </div>
                        <!-- end notification -->
                        
                        </div>
                                    
                            </div>
                        </div>
                        <div class="col-sm-6">
                       
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>