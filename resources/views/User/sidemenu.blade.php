<div class="card-box">
                    <h4 class="header-title mt-0">Menu </h4>
                    
                    
                    <div class="panel-body">
            
                        <hr>
                        <div class="text-left">
        <ul  style="list-style-type:none;"> 
                <li>
                    <a href="{{route('home')}}"class="a-color"><i class="fas fa-home"></i> Home </a>  
                </li> 
                <li>
                    <a href="{{route('user.profile_public_view')}}"class="a-color"><i class="fas fa-globe-asia"></i> Public Profile </a>  
                </li>       
                <li>    
                    <a href="#homeSubmenu1" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fa fa-box-open"></i> My Items<i class="fas fa-chevron-right" style="float:right"></i></a> 
                        <ul class="collapse list-unstyled" id="homeSubmenu1">
                            <div class="pl-2">
                                 <li>
                                        <a href="{{route('user.profile')}}"class="a-color"><i class="fa fa-sync"></i> Swap</a>
                                </li>
                                    <li>
                                        <a href="#"class="a-color"><i class="fa fa-gavel"></i> Auction</a>                     
                                </li>
                            </div>
                                <hr>
                            
                        </ul>   
               </li>        
                    <li> 
                       <a href="#homeSubmenu"class="a-color"><i class="fas fa-pencil-alt"></i> Edit Profile </a> 
                      
                    </li>
                <li>
                    <a href="{{route('show.notifications')}}"class="a-color badge1" data-badge="2"><i class="far fa-bell"></i> Notifications</a> 
                </li>
                <li>
                    <a href="{{route('show.offers')}}"class="a-color"><i class="fas fa-hand-holding-heart"></i> Offered</a> 
                </li>

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
        </div>                       
    </div>
</div>