@extends('layouts.layout2')
@section('content')
<div class="container mt-4">
    @include('User.profilebar') 
    <div class="row">
        <div class="col-xl-3 d-none d-lg-block">
                    <!-- side menu-->                   
                            @include('User.sidemenu')
                    <!-- end side menu-->              
        </div>  
        <section class="products-section col-xl-9 mb-4">
             <!-- side modal for mobile view -->
            
             <!-- end side modal -->  
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success mt-4">
                                        <p>{{$message}}</p>
                                    </div>
                                    @endif                 
                    <!-- notifiacation card -->
                    <h4 class="header-title mb-3 mt-4">My Notifications</h4> 
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
                                           @if(empty($notification->sender->avatar))
                                           <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                                           @else
                                           <img src="{{$notification->sender->avatar}}" class="card-avatar"/> </i><span class="bg-pink"><b>{{$notification->sender->name}}</b> Offer swap to  your item</span>
                                           @endif
                                            </div>
                                        </div>
                                         <p><i class="fas fa-truck" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Delivery Method:</b> {{$notification->delivery_method}} </p>
								         <p><i class="fas fa-map-marker-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Locations:</b> {{$notification->location}}</p>
                                         <p><i class="far fa-address-card"  style="color:#999;"></i><b style="color:#999;font-weight:400;"> Contact Number:</b> {{$notification->sender->profile->cellphone_no}} </p>   
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="justify-content-center">Actions</h4>
                                        </div>
                                    
                                        <div class="d-flex flex-column mt-4">
                                        {!! Form::open(['route' => ['accept.offer', $notification->id], 'method' => 'post']) !!}
                                        <button class="form-control btn btn-outline-warning btn-sm mb-2">Accept</button>
                                        {!!Form::close() !!}
                                        <button class="form-control btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#notification-modal{{$notification->id}}"type="button">More Details</button>
                                        {!! Form::open(['route' => ['posts.delete', $notification->id], 'method' => 'delete']) !!}
                                        @csrf
                                        <button class="form-control btn-sm mt-2" style="height:30px;" >Delete</button>
                                        {!!Form::close() !!}
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
        
                    <!-- end notifiacation card -->
        </section>    
    </div>
</div>
  <!-- Modal -->
@foreach($notifications as $notification)
<div class="modal fade" id="notification-modal{{$notification->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Offers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-5">
			     <img src="/storage/{{$notification->image}}" class="swap-trans-image" id="show-img" > 		
            </div>
            <div class="col-2">
                <div>
                    <img src="{{asset('image/trans-swap.png')}}" class="swap-trans" >
                </div>     
            </div>
            <div class="col-5">
                    <img src="/storage/{{$notification->post->image}}" class="swap-trans-image" id="show-img" > 	
            </div>
            <div class="container">
                <div>
                    <div class="card mb-4 products-section">
                            <div class="card-header bg-white">
                                <h3>Sender Details </h3>
                            </div>
                            <div class="card-body">
                               <div class="container">
                              
                            	<!-- web view	 -->
								<div class="d-none d-lg-block">
									<h1>{{$notification->product_name}}</h1>
								</div>
								 <!-- mobile view -->
								<div class="d-sm-block d-md-none">
								  <b>{{$notification->product_name}}</b>
								</div>
								<!-- end mobile view -->
								<hr>
							    <h3 style="color:#FFB52E;">PHP {{number_format($notification->price)}}</h3>
								<p><i class="fas fa-user-alt" style="color:#999;"></i><b style="color:#999; font-weight:400;"> Offered by: {{$notification->sender->name}}</b></p>				
								<hr>
								<p><i class="far fa-calendar-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Posted date:</b> <i class="far fa-clock" style="color:green"></i>{{$notification->created_at->diffForHumans()}}</p>
								<hr>
                                <p><i class="fas fa-truck" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Delivery Method:</b> {{$notification->delivery_method}} </p>
								<p class="mb-4"><i class="fas fa-map-marker-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Locations:</b> {{$notification->location}}</p>
                               </div>          
                      </div>
                    </div>
                </div>	
            </div>
            <div class="container">
                <div>
                    <div class="card mb-4 products-section">
                            <div class="card-header bg-white">
                                <h3>Product Descriptions </h3>
                            </div>
                            <div class="card-body">
                               <div class="container">
                                    {!!$notification->description!!}
                               </div>          
                      </div>
                    </div>
                </div>	
            </div>

        </div>
    </div> 
    </div>
  </div>
</div>
	@endforeach							
<!-- end modal -->      
@endsection