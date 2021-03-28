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
                                <h4 class="mt-4 mb-1 font-18">{{Auth::user()->name}}</h4>
                               
                                <p class="text-light mb-0"><i class="fas fa-envelope"></i> {{Auth::user()->email}}</p>
                              
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-right">
                                <button type="button" class="btn btn-light waves-effect mt-4"><i class="mdi mdi-account-settings-variant mr-1"></i> Edit Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>