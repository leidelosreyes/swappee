@extends('layouts.layout2')
 @section('content')
 <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
          
                <!-- meta -->
                <div class="profile-user-box card-box bg-custom">
                    <div class="row">
                        <div class="col-sm-6"><span class="float-left mr-3"><img src="{{Auth::user()->avatar}}" alt="" class="thumb-lg rounded-circle"></span>
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
        <!-- end row -->
        <div class="row">
            <div class="col-xl-4">

                <!-- side menu -->
                 @include('user.sidemenu')
                <!--  end side menu -->
                <div class="card-box ribbon-box">
                    <div class="ribbon ribbon-primary">Messages</div>
                    <div class="clearfix"></div>
                    <div class="inbox-widget">
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Tomaslau</p>
                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Stillnotdavid</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Kurafire</p>
                                <p class="inbox-item-text">Nice to meet you</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Shahedk</p>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Adhamdannaway</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Tomaslau</p>
                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Stillnotdavid</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8" >
                <div class="row">
                
                    <!-- end col -->
                </div>
                <!-- end row -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                <div class="card-box"class="border"style="box-shadow: 0 0px 10px 0 rgb(44 44 45 / 7%)">
                <h4 class="header-title mb-3">Add New Product</h4> 
                      @include('posts.create_form')  
                               
                </div>              
             </div>
            <!-- end col -->  
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
 </div>
</div>
@endsection