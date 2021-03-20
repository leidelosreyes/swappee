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

                <!-- Personal-Information -->
                <div class="card-box">
                    <h4 class="header-title mt-0">Menu </h4>
                    
                    
                    <div class="panel-body">
            
                        <hr>
                        <div class="text-left">
        <ul  style="list-style-type:none;">      
            <a href="#homeSubmenu" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="far fa-plus-square"style="margin-right:3px;"></i> Add Items<i class="fas fa-chevron-right" style="float:right"></i></a> 
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <div class="pl-2">
                        <li>
                            <a href="{{route('posts.create')}}"class="a-color"><i class="fa fa-sync"></i> Swap</a>
                        </li>
                        <li>
                            <a href="#"class="a-color"><i class="fa fa-gavel"></i> Auction</a>
                        </li>
                    </div>
                    <hr>
                   
                </ul>
               <li> 
                <a href="#homeSubmenu"class="a-color"><i class="fas fa-pencil-alt"></i> Edit Profile</a> 
               
                </li>
       </ul> 
                            <!-- <a class="text-muted font-13"><strong>Edit Profile</strong></a>
                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">(+12) 123 1234 567</span></p>
                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">coderthemes@gmail.com</span></p>
                            <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">USA</span></p>
                            <p class="text-muted font-13"><strong>Languages :</strong> <span class="m-l-5"><span class="flag-icon flag-icon-us m-r-5 m-t-0" title="us"></span> <span>English</span> </span><span class="m-l-5"><span class="flag-icon flag-icon-de m-r-5" title="de"></span> <span>German</span> </span><span class="m-l-5"><span class="flag-icon flag-icon-es m-r-5" title="es"></span> <span>Spanish</span> </span><span class="m-l-5"><span class="flag-icon flag-icon-fr m-r-5" title="fr"></span> <span>French</span></span>
                            </p> -->
                        </div>
                        
                    </div>
                </div>
                <!-- Personal-Information -->
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
                    <h4 class="header-title mb-3">My Product</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Wish item</th>
                                    <th>Bring By</th>
                                    
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $posts)
                                <tr>
                                    <td>{{$posts->product_name}}</td>
                                    <td>₱ {{$posts->price}}</td>
                                    <td>{{$posts->wishitem}}</td>
                                    <td>{{$posts->delivery_method}}</td>
                                    
                                    <td style="width:120px;">
                                    <div class="d-flex">
                                    <a href="/posts/{{$posts->id}}"><i class="far fa-eye" style="color: #57585a;"></i>
                                    <a href="{{route('posts.edit',$posts->id)}}"><i class="fas fa-edit"></i></a>
                                    {!!  ::open(['route' => ['posts.delete', $posts->id], 'method' => 'delete']) !!}
                                            <button style="border: none;
                                                       background: none;">
                                                <i class="fas fa-trash-alt" style="color:red;"></i>
                                            </button>
                                    {!!Form::close() !!}
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
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