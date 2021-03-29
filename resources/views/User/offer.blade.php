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
                <li class="breadcrumb-item"><a href="{{route('show.notifications')}}">Notifications</a></li>
                <li class="breadcrumb-item active" aria-current="page">Offers</li>
                
               
            </ol>
            </nav>
                <!-- end row -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                <div class="card-box"class="border"style="box-shadow: 0 0px 10px 0 rgb(44 44 45 / 7%)">
                    <h4 class="header-title mb-3 d-flex">My Offers</h4>
                    <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box" type="search" name="search" placeholder="Search your items" aria-label="Search">
   					</form>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Send to</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($offer as $offer)
                                    <td style="width:100px;"><img src="/storage/{{$offer->image}}"  style=" max-width:4rem; max-height:5rem;"id="show-img" ></td>
                                    <td style="max-width:120px;height:20px;"><div class="mt-2"style="height:20px; overflow:hidden">{{$offer->product_name}}</div></td>
                                    <td style=""><div class="mt-2">PHP {{$offer->price}}</div></td>
                                    <td style=""><div class="mt-2"><i class="far fa-clock" style="color:green"></i> {{$offer->created_at->diffForHumans()}}</div></td>
                                    <td><div div class="mt-2">{{$offer->receiver->name}}</div></td>
                                    <td><div div class="mt-2">Pending</div></td>             
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