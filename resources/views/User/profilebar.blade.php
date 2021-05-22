<div class="d-none d-lg-block">
<div class="container">
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
                                <a href="http://127.0.0.1:8000/user/profile" style="color:whitesmoke;"><h4 class="mb-1 font-18" style="color:whitesmoke;margin-top:2rem;">{{Auth::user()->name}}</h4></a>
                                <p class="mb-0" style="color:whitesmoke;"><i class="far fa-clock" style="color:green;"></i> Joined 2 days ago</p>
                                <!-- <p class="mb-0" style="color:whitesmoke;"><span>Active 0 minutes ago</span></p> -->
                               
                                              <!-- <p class="text-light mb-0"><i class="far fa-envelope" style="color:white"></i> joelpogitalaga@gmail.com</p> -->                          
                        </div>
                     </div>
                     <div class="col-sm-8" style="border-left: 1.5px solid rgb(211,211,211);text-align: center;">
                     <div class="row">
                        <div class="col-sm" style="padding-top:1.5rem;">
                            <div class="media-body text-white">
                                <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-envelope" style="color:whitesmoke;"></i><span style="color:whitesmoke; margin-left: 3px;"> Email:</span><span style="font-weight: 700;"> @joelpogi</span></p>
                                <p class="mb-0" style="color:whitesmoke;  text-align: left;margin-left: 2.3rem"><i class="far fa-chart-bar" style="color:red;"></i><span style="color:whitesmoke; margin-left: 3px;"> Chart:</span><span style="font-weight: 700;"> 16.k</span></p>                                       
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="media-body text-white" style="padding-top:1.5rem;">
                                <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-crown" style="color:rgb(255,215,0);"></i><span style="color:whitesmoke; margin-left: 3px;"> Won:</span><span style="font-weight: 700;"> 16.k</span></p>
                                <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-coins" style="color:#FFA62F;"></i><span style="color:whitesmoke; margin-left: 3px;"> Points:</span><span style="font-weight: 700;"> 16.k</span></p>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="media-body text-white" style="padding-top:1.5rem;">
                                <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-sync" style="color:#708090;"></i><span style="color:whitesmoke; margin-left: 3px;"> Swap:</span><span style="font-weight: 700;"> 16.k</span></p>
                                <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-gavel" style="color:brown"></i><span style="color:whitesmoke; margin-left: 3px;"> Auction:</span><span style="font-weight: 700;"> 16.k</span></p>                                                    
                            </div>
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
                                <a href="http://127.0.0.1:8000/user/profile" style="color:gray;"><h4 class="mt-4 mb-1 font-18" style="color:whitesmoke;">{{Auth::user()->name}}</h4></a>
                                <p class="mb-0" style="color:whitesmoke;"><i class="far fa-clock" style="color:green;"></i> Joined 2 days ago</p>
                                              <!-- <p class="text-light mb-0"><i class="far fa-envelope" style="color:white"></i> joelpogitalaga@gmail.com</p> -->                          
                        </div>
                     </div>
                     <div class="col-sm-6" style="text-align: center;">
                     <div class="row">
                        <div class="col-4 pr-0" style="padding-top:1rem;padding-left:4px;">
                            <div class="media-body text-white">
                                <p class="mb-1" style="color:whitesmoke; font-size: .7rem;"><i class="fas fa-envelope" style="color:whitesmoke; font-size: .7rem;"></i> {{Auth::user()->name}}</p>
                                <p class="mb-0" style="color:whitesmoke; font-size: .7rem;text-align: left;margin-left: .4rem;"><i class="far fa-chart-bar" style="color:red; font-size: .7rem;"></i> 16.k</p>                                                                      
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="media-body text-white" style="padding-top:1rem;">
                                <p class="mb-1" style="color:whitesmoke; font-size: .7rem;"><i class="fas fa-crown" style="color:rgb(255,215,0); font-size: .7rem;"></i> 16.k</p>
                                <p class="mb-0" style="color:whitesmoke; font-size: .7rem;"><i class="fas fa-coins" style="color:#FFA62F; font-size: .7rem;"></i> 16.k</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="media-body text-white" style="padding-top:1rem;">
                            <p class="mb-0" style="color:whitesmoke;font-size: .7rem;"><i class="fas fa-sync" style="color:#708090;font-size: .7rem;"></i><span style="color:whitesmoke; margin-left: 3px;font-size: .7rem;"></span> 16.k</p>
                            <p class="mb-0" style="color:whitesmoke;font-size: .7rem;x`"><i class="fas fa-gavel" style="color:brown;font-size: .7rem;"></i><span style="color:whitesmoke; margin-left: 3px;font-size: .7rem;"></span> 16.k</p>                          
                            </div>
                        </div>
                    </div>
                     </div>
                </div>
			</div>
		</div>
</div>
</div>
<!-- end -->




