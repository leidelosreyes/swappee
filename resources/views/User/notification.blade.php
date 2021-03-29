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
            <ol class="breadcrumb">
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
						<input class="form-control mr-sm-2 search_box" type="search" name="search" placeholder="Search your items" aria-label="Search">
   					</form>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            @foreach($notifications as $notification)
                              
                                    <td style="width:100px;"><img src="/storage/{{$notification->image}}"  style=" max-width:4rem; max-height:5rem;"id="show-img" ></td>
                                    <td style="max-width:120px;height:20px;"><div class="mt-3"style="height:20px; overflow:hidden">{{$notification->product_name}}</div></td>
                                    <td style=""><div class="mt-3">PHP {{$notification->price}}</div></td>
                                    <td style=""><div class="mt-3"><i class="far fa-clock" style="color:green"></i> {{$notification->created_at->diffForHumans()}}</div></td>      
                                    <td><div div class="mt-3">{{$notification->sender->name}}</div></td>
                                     <td> 
                                        <div class="d-flex mt-2">
                                          <button class="btn btn-outline-success mr-2">Accept</button>
                                          <button class="btn btn-outline-danger">Decline</button>
                                        </div>

                                     </td>
                            </tbody>
                            @endforeach
                        </table>
                       
                           
                      
                    </div>
            
        
                 
            </div>

            
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
                    </div>
                
@endsection