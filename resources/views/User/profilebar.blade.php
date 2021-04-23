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
                                <p class="text-light mb-0"><i class="far fa-clock" style="color:green"></i> Joined {{Auth::user()->created_at->diffForHumans()}}</p>
                                <!-- <p class="text-light mb-0"><i class="far fa-envelope" style="color:white"></i> {{Auth::user()->email}}</p> -->
                                
                                  
                                    
                            </div>
                        </div>
                        <div class="col-sm-2">
                             
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>
