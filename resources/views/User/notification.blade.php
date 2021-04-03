@extends('layouts.layout2')
@section('content')
        
    <div class="container mt-4">
      @include('user.profilebar')
        <!-- end row -->
        <div class="row">
            <div class="col-xl-4">

                <!-- side menu -->
                 @include('user.sidemenu')
                <!--  end side menu -->
              <!-- side bar message -->
              @include('messages.sidebar_message')
                  <!-- sidebar message end -->

            <div class="col-xl-8" >
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:white;">
                <li class="breadcrumb-item"><a href="{{route('user.profile')}}">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Notifications</li>            
                <li class="breadcrumb-item"><a href="{{route('show.offers')}}">offers</a></li>
               
            </ol>
            </nav>
        
                <!-- end row -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                <div class="card-box"class="border"style="box-shadow: 0 0px 10px 0 rgb(44 44 45 / 7%)">
                    <h4 class="header-title mb-3 d-flex">Notifications</h4>
                    <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box_category" type="search" name="search" placeholder="Search Notification" aria-label="Search">
   					</form>
                    
                            <!-- notification card -->
            @forelse($notifications as $notification)
                        @empty
                            <div class="alert alert-danger mt-4">
                                <p><i class="fas fa-exclamation-triangle" style="color:red;"></i> No Items Found </p>
                             </div>
                @endforelse
                @foreach($notifications as $notification)
                    <div class="container mt-4 mb-2">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-12">
                                <div class="row p-2 bg-white border rounded">
                                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image-user" src="/storage/{{$notification->image}}"></div>
                                    <div class="col-md-6 mt-1">
                                       
                                            <h5 style="over-flow:hidden;">{{$notification->product_name}}</h5>     
                                            <p class="text-justify text-truncate para mb-0"> <h4 class="mr-1" style="color:#FFB52E;">PHP {{number_format($notification->price)}}</h4></p>
                                        
                                        <div class="d-flex flex-row">
                                            <div class="ratings mr-2">
                                           
                                            <img src="{{$notification->sender->avatar}}" class="card-avatar"/> </i><span class="bg-pink"><b>{{$notification->sender->name}}</b> Want to swap your item</span>
                                            
                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="justify-content-center">Actions</h4>
                                        </div>
                                    
                                        <div class="d-flex flex-column mt-4">
                                        <a href="" class="btn btn-primary btn-sm mb-2" type="button">Accept</a>
                                        <a href="" class="btn btn-primary btn-sm" type="button">Decline</a>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">More Details</button>
                                        </div>
                                    </div>
                                </div>                
                            </div>
                        </div>
                    </div>
                <div class="container text-center">
                       
                </div>
                 @endforeach
                <!-- end notification card -->
        
                 
                </div>

            
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
                    </div>
                
@endsection