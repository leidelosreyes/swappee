<!-- mobile view side bar -->
<div class="d-sm-block d-md-none mb-2">
    
             <div class="text-left mt-4">
             <a href=""data-toggle="modal" style=""data-target="#exampleModal"><p> <i class="fas fa-bars"></i> Menu</p> </a>             
             </div>
        
        
    
    <!-- modal -->
            <div class="modal left fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <a href="{{route('user.profile')}}"class="a-color"><i class="fa fa-sync"></i> Swap </a>
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
                                            <!-- <li>
                                                <a href="{{route('show.notifications')}}"class="a-color badge1" data-badge="2"><i class="far fa-bell"></i> Notifications</a> 
                                            </li> -->
                                            <hr>
                                            <li>
                                            <a href="#homeSubmenu"class="a-color"><i class="far fa-comment-alt"></i> Messages <span style="float:right;">({{$messages->count()}})</span></a> 
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
