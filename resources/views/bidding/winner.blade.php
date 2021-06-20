@extends('layouts.layout2')

@section('content')
  

<div class="container">
@include('User.profilebar')
  <div class="row">
     <div class="col-xl-3 d-none d-lg-block">
         
                <!-- side menu-->                   
                        @include('User.sidemenu')
                 <!-- end side menu-->
                  
     </div>  
 
        <!-- product section -->
        <section class="col-xl-9 mb-4">
        <div class="card-box"class="border" style="box-shadow: 0 0px 10px 0 rgb(44 44 45 / 7%)">
         <!-- side modal for mobile view -->
       
         <!-- end side modal -->    
                               @if ($message = Session::get('success'))
                                <div class="alert alert-success mt-4">
                                     <p>{{$message}}</p>
                                </div>
                                @endif
                                @if ($message = Session::get('error'))
                                <div class="alert alert-danger mt-4">
                                     <p>{{$message}}</p>
                                </div>
                                @endif
                                <h2>Won items</h2> 
                        <!-- web view -->

                        <div class="d-none d-lg-block">     
                        <form class="d-flex mb-2 mt-2"  action="{{route('search.profile_product')}}" method="GET">
                        <input class="form-control  search_box_category" type="search" name="search" placeholder="Search your items" aria-label="Search">
                        </form>
                        </div>
                         
                         <!-- mobile view -->
                        <div class="d-sm-block d-md-none">
                                <form class="d-flex mb-2 mt-2"  action="{{route('search.profile_product')}}" method="GET">
                                <input class="form-control  search_box_category" type="search" name="search" placeholder="Search your items" aria-label="Search">
                                </form>                   
                        </div>
                         <!-- end mobile view -->
                      
       <!-- product card -->
           @forelse($winners as $post)
                        @empty
                            <div class="alert alert-danger mt-4">
                                <p><i class="fas fa-exclamation-triangle" style="color:red;"></i> No Items</p>
                             </div>
                @endforelse
                @foreach($winners as $post)
                    <div class="container mt-4 mb-2">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-12">
                                <div class="row p-2 bg-white border rounded">
                                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image-user" src="/storage/{{$post->auction->image}}"></div>
                                    <div class="col-md-6 mt-1">
                                        <h5 style="over-flow:hidden;">{{$post->auction->product_name}}</h5>     
                                        <p class="text-justify text-truncate para mb-0"> <h4 class="mr-1" style="color:#FFB52E;">PHP {{number_format($post->auction->estimated_price)}}</h4></p>
                                        <div class="d-flex flex-row">                   
                                            <div class="ratings mr-2">
                                                    <p>you won this item</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="justify-content-center">Actions</h4>
                                        </div>
                                    
                                        <div class="d-flex flex-column mt-2">
                                        <button  data-toggle="modal" data-target="#claim" class="btn btn-outline-warning btn-sm mb-2" >Claim</button>
                                        <button  data-toggle="modal" data-target="#{{$post->id}}" class="btn btn-outline-warning btn-sm" >Details</button>
                                        </div>
                                    </div>
                                </div>                
                            </div>
                        </div>
                    </div>
                <div class="container text-center">
                        {{$winners->links()}}
                </div>
                 @endforeach
                <!-- end product card -->
                </div>
         </div>
        </div>
</div>


<!-- end col -->

              <!-- Modal -->
        <div class="modal fade" id="claim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">To deliver</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
				<p class="mb-4">If your drop off location is wrong you are welcome to change that </p>
					<form action="{{route('courier.store')}}" method="post">
					@csrf
                    <p></p>
					<div class="form__div">
                                        <input type="text" 
                                        id="drop_off_location"
                                        name="drop_off_location"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('drop_off_location') is-invalid @enderror"
                                        value="{{$user->address}}"
                                        autocomplete="drop_off_location" autofocus
                                        >
                                        <label for="" class="form__label">Your Drop off Address</label></label>
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
                                        value="{{$user->cellphone_no}}"
                                        autocomplete="contact_number" autofocus
                                        >
                                        <label for="" class="form__label">Contact Number</label></label>
                                         @error('contact_number')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                        </div>
								
									<button class="btn btn-primary " type="submit" style="background-color:#FFB52E;border:none;"  data-toggle="modal" data-target="#bid-modal">
									<i class="far fa-comment-alt"></i> Go
                                 </button>
					</form>
						 
                  </div>
          
              </div>
           </div>
        </div>                                          
     <!-- end modal -->    
               
@endsection
