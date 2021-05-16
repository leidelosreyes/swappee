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
                    <h4 class="header-title mb-3 mt-4">Items for Delivery</h4> 
                           <!-- notification card -->
            @forelse($delivery as $notification)
                        @empty
                            <div class="alert alert-danger mt-4">
                                <p><i class="fas fa-exclamation-triangle" style="color:red;"></i> No Items Found </p>
                             </div>
                @endforelse
                @foreach($delivery as $notification)
                    <div class="container mt-4 mb-2">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-12">
                                <div class="row p-2 bg-white border rounded">
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
                                    <div class="col-md-6 mt-1">
                                       
                                            <h5 style="over-flow:hidden;">{{$notification->product_name}}</h5>     
                                            <p class="text-justify text-truncate para mb-0"> <h4 class="mr-1" style="color:#FFB52E;">PHP {{number_format($notification->price)}}</h4></p>
                                        
                                        <div class="d-flex flex-row">
                                            <div class="ratings mr-2">
                                           @if(empty($notification->sender->avatar))
                                           <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                                           @else
                                           <img src="{{$notification->sender->avatar}}" class="card-avatar"/> </i><span class="bg-pink"><b>{{$notification->sender->name}}</b></span>
                                           @endif
                                            </div>
                                        </div>
                                         <p><i class="fas fa-truck" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Delivery Method:</b> {{$notification->delivery_method}} </p>
								         <p><i class="fas fa-map-marker-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Locations:</b> {{$notification->location}}</p>
                                         <p><i class="far fa-address-card"  style="color:#999;"></i><b style="color:#999;font-weight:400;"> Contact Number:</b> {{$notification->sender->profile->cellphone_no}} </p>   
                                    </div>
                                    <div class="align-items-center align-content-center col-md-6 border-left mt-1">
                                    <h5 style="over-flow:hidden;">{{$notification->post->product_name}}</h5>     
                                            <p class="text-justify text-truncate para mb-0"> <h4 class="mr-1" style="color:#FFB52E;">PHP {{number_format($notification->post->price)}}</h4></p>
                                        
                                        <div class="d-flex flex-row">
                                            <div class="ratings mr-2">
                                           @if(empty($notification->receiver->avatar))
                                           <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                                           @else
                                           <img src="{{$notification->receiver->avatar}}" class="card-avatar"/> </i><span class="bg-pink"><b>{{$notification->receiver->name}}</b></span>
                                           @endif
                                            </div>
                                        </div>
                                         <p><i class="fas fa-truck" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Delivery Method:</b> {{$notification->delivery_method}} </p>
								         <p><i class="fas fa-map-marker-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Locations:</b> {{$notification->post->location}}</p>
                                         <p><i class="far fa-address-card"  style="color:#999;"></i><b style="color:#999;font-weight:400;"> Contact Number:</b> {{$notification->receiver->profile->cellphone_no}} </p>   
                                    </div>
                                </div> 
                                          
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                                {!! Form::open(['route' => ['accept.offer', $notification->id], 'method' => 'post']) !!}
                                        <button class="form-control btn btn-outline-warning  mb-2">To ship</button>
                                        {!!Form::close() !!}
                                </div>   
                    </div>
                <div class="container text-center">
                        {{$delivery->links()}}
                </div>
                 @endforeach
                <!-- end notification card -->
        
                    <!-- end notifiacation card -->
        </section>    
    </div>
</div>
 
@endsection