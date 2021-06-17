<!-- mobile view side bar -->
<div class="d-sm-block d-md-none">
    
           
<a class="nav-link mt-2" style="color: #57585a; font-size:25px;"data-toggle="modal" style=""data-target="#exampleModal1"><p> <i class="fas fa-bars"></i></p></a>             
            
        
        
    
    <!-- modal -->
            <div class="modal left fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                         <h5 class="modal-title" >Menu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-left">
                              <!-- side menu -->
                                   
                              <ul  style="list-style-type:none;padding: 0 0 0 20px; margin: 0;"> 
                <li>
                    <a href="{{route('home')}}"class="a-color"><i class="fas fa-home"></i> <span style="margin-left: .5rem;">Home</span> </a>  
                </li> 
                <li>
                    <a href="{{route('public_profile_posts.show',Auth::id())}}" class="a-color"><i class="fas fa-globe-asia"></i> <span style="margin-left: .6rem;"> Public Profile </span></a>  
                </li> 
                <li> 
                       <a href="{{route('user.edit_profile')}}"class="a-color"><i class="fas fa-pencil-alt"></i><span style="margin-left:.5rem;"> Edit Profile</span> </a> 
                      
                    </li>      
                <li>    
                    <a href="#sidemenu" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fa fa-box-open"></i><span style="margin-left: .4rem;"> My Items</span><i class="fas fa-chevron-right" style="float:right"></i></a> 
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
                    <a href="#sidemenu1" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-clipboard-check" style="font-size: 1rem;"></i><span style="margin-left: .8rem;"> Accepted Item </span><i class="fas fa-chevron-right" style="float:right"></i></a> 
                        <ul class="collapse list-unstyled" id="sidemenu1">
                            <div class="pl-2">
                                <li>
                                        <a href="{{route('for_meetup_item.show')}}"class="a-color"><i class="far fa-handshake"></i> Meet Up</a>                     
                                </li>
                                <li>
                                        <a href="{{route('for_delivery_item.show')}}"class="a-color"><i class="fas fa-shipping-fast"></i> Delivery</a>                     
                                </li>
                            </div>
                                <hr>
                            
                        </ul>   
               </li>
               <li>    
                    <a href="#sidemenu1-toReceive" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fas fa-truck"></i><span style="margin-left: .4rem;"> To Receive </span><i class="fas fa-chevron-right" style="float:right"></i></a> 
                        <ul class="collapse list-unstyled" id="sidemenu1-toReceive">
                            <div class="pl-2">

                                <li>
                                        <a href="#"class="a-color"><i class="far fa-handshake"></i> Meet Up</a>                     
                                </li>
                                <li>
                                        <a href="#"class="a-color"><i class="fas fa-shipping-fast"></i> Delivery</a>                     
                                </li>
                            </div>
                                <hr>
                            
                        </ul>   
               </li>                        
                   
                <!-- <li>
                    <a href="{{route('show.notifications')}}"class="a-color badge1" data-badge="2"><i class="far fa-bell"></i> Notifications</a> 
                </li> -->
                <hr>
                <li>
                <a href="{{route('user.won_view')}}"class="a-color"><i class="fas fa-trophy"></i> Auction Won Items <span style="float:right;">()</span></a> 
                </li>
                <li>
                <a href="{{route('show.message')}}"class="a-color"><i class="far fa-comment-alt"></i> Messages <span style="float:right;">({{$messages->count()}})</span></a> 
                </li>
                <li>
                <a href="{{route('show.sent_item')}}"class="a-color"><i class="fas fa-paper-plane"></i> Sent Item <span style="float:right;"></span></a> 
                </li>
                <li>
                    <a href="{{route('show.offers')}}"class="a-color"><i class="fas fa-hand-holding-heart"></i> Offered <span style="float:right;">({{$offer->count()}})</span></a> 
                </li>


                <hr>
                    <li>
                        <a href="{{route('leaderboards')}}"class="a-color"><i class="fas fa-chess"></i> Leaderboards </a> 
                    </li>
                <li>
                    <a href=""class="a-color"><i class="fas fa-list-ol"></i> Order List </a> 
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
                            <!-- end side menu -->
                           
                        </div>
                        <div class="modal-footer">
                           
                        </div>
                    </div>
                </div>
            </div>
<!-- end modal -->
</div>  
<!-- end mobile view -->
