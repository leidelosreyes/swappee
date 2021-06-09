<div class="d-none d-lg-block">

    <div class="card mb-3 products-section">
			<div class="card-body" style="background-color: #02c0ce !important;">
                <div class="row">
                    <div class="col-sm-4">
                        <span class="float-left mr-3">
                                
                                @if(empty(Auth::user()->avatar))
                                <img src="{{asset('image/user_icon.png')}}" alt="" class="thumb-lg rounded-circle">
                                @else
                                <img src="{{Auth::user()->avatar}}" alt="" class="thumb-lg rounded-circle">
                                @endif
                        </span>
                                          
                        <div class="media-body text-white">
                                <a href="{{route('user.profile')}}" style="color:whitesmoke;"><h4 class="mb-1 font-18" style="color:whitesmoke;margin-top:2rem;">{{Auth::user()->name}}</h4></a>
                                <p class="mb-0" style="color:whitesmoke;"><i class="far fa-clock" style="color:green;"></i>Joined {{Auth::user()->created_at->diffForHumans()}}</p>
                                <!-- <p class="mb-0" style="color:whitesmoke;"><span>Active 0 minutes ago</span></p> -->
                               
                                              <!-- <p class="text-light mb-0"><i class="far fa-envelope" style="color:white"></i> joelpogitalaga@gmail.com</p> -->                          
                        </div>
                     </div>
                     <div class="col-sm-8" style="border-left: 1.5px solid rgb(211,211,211);text-align: center;">
                     <div class="row">
                        <div class="col-sm-6" style="padding-top:1.5rem;">
                            <div class="media-body text-white">
                                <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-envelope" style="color:whitesmoke;"></i><span style="color:whitesmoke; margin-left: 3px;"></span><span style="font-weight: 700;">{{Auth::user()->email}}</span></p>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="media-body text-white" style="padding-top:1.5rem;">
                           
                                <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-coins" ></i><span style="color:whitesmoke; margin-left: 3px;"> Points:</span><span style="font-weight: 700;">{{$points->amount}}</span></p>
                             
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="media-body text-white" style="padding-top:1.5rem;">
                        
                                <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-sync"></i><span style="color:whitesmoke; margin-left: 3px;"> Reports:</span><span style="font-weight: 700;"> 10</span></p>                                              
                          
                            </div>

                        </div>
                    </div>
                     </div>
                </div>
			</div>
		</div>
</div>



<!-- mobileview start-->
<div class="d-sm-block d-md-none mb-4">
<div class="container">
    <div class="card mb-4 products-section">
			<div class="card-body" style="background-color: #02c0ce !important;">
                <div class="row">
                    <div class="col-sm-6">
                        <span class="float-left mr-3">
                                 @if(empty(Auth::user()->avatar))
                                <img src="{{asset('image/user_icon.png')}}" alt="" class="thumb-lg rounded-circle">
                                @else
                                <img src="{{Auth::user()->avatar}}" alt="" class="thumb-lg rounded-circle">
                                @endif
                        </span>
                                          
                        <div class="media-body text-white">
                                <a href="{{route('user.profile')}}" style="color:gray;"><h4 class="mt-4 mb-1 font-18" style="color:whitesmoke;">{{Auth::user()->name}}</h4></a>
                                <p class="mb-0" style="color:whitesmoke;"><i class="far fa-clock" style="color:green;"></i> Joined 2 days ago</p>
                                              <!-- <p class="text-light mb-0"><i class="far fa-envelope" style="color:white"></i> joelpogitalaga@gmail.com</p> -->                          
                        </div>
                     </div>
                     <div class="col-sm-6" style="text-align: center;">
                     
                     </div>
                </div>
			</div>
		</div>
</div>
</div>
<!-- end -->