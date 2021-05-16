<div class="card-box">
                
                    <div class="panel-body">
                        <h4>Menu</h4>
               
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
                    <a href="#sidemenu" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fa fa-box-open"></i> My Items<i class="fas fa-chevron-right" style="float:right"></i></a> 
                        <ul class="collapse list-unstyled" id="sidemenu">
                            <div class="pl-2">
                                 <li>
                                        <a href="{{route('user.profile')}}"class="a-color"><i class="fa fa-sync"></i> Swap </a>
                                </li>
                                    <li>
                                        <a href="{{route('user.auction_view')}}"class="a-color"><i class="fa fa-gavel"></i> Auction</a>                     
                                </li>
                            </div>
                                <hr>
                            
                        </ul>   
               </li>
               <li>    
                    <a href="#sidemenu1" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-clipboard-check"></i> Accepted Item<i class="fas fa-chevron-right" style="float:right"></i></a> 
                        <ul class="collapse list-unstyled" id="sidemenu1">
                            <div class="pl-2">
                                 <li>
                                        <a href=""class="a-color"><i class="fas fa-people-carry"></i> Pick Up </a>
                                </li>
                                <li>
                                        <a href=""class="a-color"><i class="far fa-handshake"></i> Meet Up</a>                     
                                </li>
                                <li>
                                        <a href=""class="a-color"><i class="fas fa-shipping-fast"></i> Delivery</a>                     
                                </li>
                            </div>
                                <hr>
                            
                        </ul>   
               </li>                
                    <li> 
                       <a href="{{route('user.edit_profile')}}"class="a-color"><i class="fas fa-pencil-alt"></i> Edit Profile </a> 
                      
                    </li>
                <!-- <li>
                    <a href="{{route('show.notifications')}}"class="a-color badge1" data-badge="2"><i class="far fa-bell"></i> Notifications</a> 
                </li> -->
                <hr>
                <li>
                <a href="{{route('user.won_view')}}"class="a-color"><i class="fas fa-trophy"></i> Auction Won Items <span style="float:right;">()</span></a> 
                </li>
                <li>
                <a href="{{route('show.message')}}"class="a-color"><i class="far fa-comment-alt"></i> Messages <span style="float:right;">()</span></a> 
                </li>
                <li>
                    <a href="{{route('show.offers')}}"class="a-color"><i class="fas fa-hand-holding-heart"></i> Offered <span style="float:right;">({{$offer->count()}})</span></a> 
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
        </div>                       
    </div>
</div>