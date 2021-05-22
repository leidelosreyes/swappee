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
                    <!-- create form -->
                    <h4 class="header-title mb-3 mt-4">Place Order</h4> 
                     <!-- place order form -->
                     <hr>
                     <form action="{{route('courier_swap.place_order')}}" method="post">
					@csrf
                    <h2>Pick-Up</h2>
					<div class="form__div">
                                        <input type="text" 
                                        readonly
                                        id="pickup_location"
                                        name="pickup_location"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('pickup_location') is-invalid @enderror"
                                        value="{{$courier->order->points['0']->address}}"
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
                                        readonly
                                        name="contact_no"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('contact_no') is-invalid @enderror"
                                        value="{{$courier->order->points['0']->contact_person->phone}}"
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
                                        readonly
                                        id="drop_off_location"
                                        name="drop_off_location"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('drop_off_location') is-invalid @enderror"
                                        value="{{$courier->order->points['1']->address}}"
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
                                        readonly
                                        name="contact_number"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('contact_number') is-invalid @enderror"
                                        value="{{$courier->order->points['1']->contact_person->phone}}"
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
                            <p>PHP {{$courier->order->payment_amount}}</p>
                            <button class="btn btn-primary " type="submit" style="background-color:#FFB52E;border:none;"  data-toggle="modal" data-target="#bid-modal">Place Order</button>
                        </div>      
					</form>



                     <!-- end place order form -->
        </section>    
    </div>
</div>

 
@endsection
