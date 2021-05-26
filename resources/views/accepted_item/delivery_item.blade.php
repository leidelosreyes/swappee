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
                                        <button class="form-control btn btn-outline-warning  mb-2" data-toggle="modal" data-target="#delivery{{$notification->id}}"><i class="fas fa-shipping-fast"></i> To ship</button>
                            </div>   
                    </div>
                <div class="container text-center mb-4">
                        {{$delivery->links()}}
                </div>
                 @endforeach
                <!-- end notification card -->
        
                    <!-- end notifiacation card -->
        </section>    
    </div>
</div>
@foreach($delivery as $deliver)
         <!-- Modal -->
         <div class="modal fade" id="delivery{{$deliver->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">To deliver</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
				<div class="alert alert-info alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Note!</strong> For a better user experience avoid Fake Delivery booking unless you are willing to lose points on your account and will be ban Until further Notice From Swappee.
                <br>
                <br>
                Once your order is settle , Cancellation is prohibited for the sake of both parties
                </div>
                <form action="{{route('courier_swap.calculate')}}" method="get">
					@csrf
                    <h2>Pick-Up</h2>
					<div class="form__div">
                                        <input type="text" 
                                        id="pickup_location"
                                        name="pickup_location"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('pickup_location') is-invalid @enderror"
                                        value="{{$deliver->post->location}}"
                                        autocomplete="pickup_location" autofocus
                                        >
                                        <label for="" class="form__label">Address</label></label>
                                         @error('pickup_location')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                        <div class="form__div">
                                    <input type="number" 
                                        id="contact_no"
                                        name="contact_no"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('contact_no') is-invalid @enderror"
                                        value="{{$deliver->receiver->profile->cellphone_no}}"
                                        autocomplete="contact_no" autofocus
                                        >
                                        <label for="" class="form__label">Phone Number</label></label>
                                         @error('contact_no')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                        </div>
                        <h2>Drop-Off</h2>
                        <div class="form__div">
                                        <input type="text" 
                                        id="drop_off_location"
                                        name="drop_off_location"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('drop_off_location') is-invalid @enderror"
                                        value="{{$deliver->location}}"
                                        autocomplete="drop_off_location" autofocus
                                        >
                                        <label for="" class="form__label">Address</label></label>
                                         @error('drop_off_location')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                        <div class="form__div">
                                    <input type="number" 
                                        id="contact_number"
                                        name="contact_number"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('contact_number') is-invalid @enderror"
                                        value="{{$deliver->sender->profile->cellphone_no}}"
                                        autocomplete="contact_number" autofocus
                                        >
                                        <label for="" class="form__label">Phone Number</label></label>
                                         @error('contact_number')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary " type="submit" style="background-color:#FFB52E;border:none;"  data-toggle="modal" data-target="#bid-modal">Calculate Order</button>
                        </div>      
					</form>
                </div>
              </div>
           </div>
        </div>    
    @endforeach                                      
     <!-- end modal -->    
     
@endsection