@extends('layouts.layout2')
@section('content')
<div class="container">
@include('layouts.carousel')
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-5 mt-4 mb-4">
			<div class="card">
				<div class=card-body>
					<div class="view-product">
						<div class="show" href="/storage/{{$post->image}}" style=" height: 25rem; width: 100%;">
							<img src="/storage/{{$post->image}}" style="width:100%;height:100%;" id="show-img" > 
						</div>					
					</div>
					<!-- Button trigger modal -->
						<button class="btn btn-primary  mt-4 " type="button" style="background-color:#FFB52E;border:none;"  data-toggle="modal" data-target="#offer-modal">
									<i class="far fa-comment-alt"></i> Make offer
                        </button>
					<!-- End Button -->
				</div> 	
			</div>
		</div>

		<div class="col-sm-7 mt-4 mb-4">
            <div class="card">
			@if(empty($post->user->avatar))
				  <img src="{{asset('image/user_icon.png')}}" class="card-avatar-view" style="margin-top:-30px;"/>
                  @else
				  <img src="{{$post->user->avatar}}" class="card-avatar-view" style="margin-top:-30px;"/>
                  @endif
			
				<div class="card-body">
                    
                              
								<!-- web view	 -->
								<div class="d-none d-lg-block">
									<h1>{{$post->product_name}}</h1>
								</div>
								 <!-- mobile view -->
								<div class="d-sm-block d-md-none">
								  <b>{{$post->product_name}}</b>
								</div>
								<div class="d-sm-block d-md-none">
								<h5 style="color:#FFB52E;"> PHP {{number_format($post->price)}}</h5>
								</div>
								<!-- end mobile view -->

								<!-- Button trigger modal -->
								<div class="d-none d-lg-block">
									<div class="mt-4">
										<button type="button" class="btn btn-primary mt-4" style="float:right;background-color:#FFB52E;border:none;" data-toggle="modal" data-target="#exampleModal">
										<i class="far fa-comment-alt"></i> Message
										</button>
									</div>
									<div class="mt-4">
										<button type="button" class="btn btn-outline-info mt-4" style="float:right; margin:5px;" data-toggle="modal" data-target="#exampleModal">
										<i class="fas fa-user-circle"></i> Visit Profile
										</button>
									</div>
								</div>

								<div class="d-sm-block d-md-none ">
									<div class="mt-4">
										<button type="button" class="btn btn-primary mt-2" style="float:right;background-color:#FFB52E;border:none;" data-toggle="modal" data-target="#exampleModal">
										<i class="far fa-comment-alt"></i>
										</button>
									</div>
									<div class="mt-4">
										<button type="button" class="btn btn-outline-info mt-2" style="float:right; margin:5px;" data-toggle="modal" data-target="#exampleModal">
										<i class="fas fa-user-circle"></i>
										</button>
									</div>
								</div>
								
								<hr>
								<div class="d-none d-lg-block">
								   <h3 style="color:#FFB52E;"> PHP {{number_format($post->price)}}</h3>
								</div>
							    
								
								<p><i class="fas fa-user-alt" style="color:#999;"></i><b style="color:#999; font-weight:400;"> Posted by:</b> {{$post->user->name}}</p>
								
								<hr>
								
														
                                <p><i class="fas fa-sync-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Wish to Swap:</b> {{$post->wishitem}}</p>								
								<p><i class="far fa-calendar-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Posted date:</b> <i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</p>
								<hr>
								
                                <p><i class="fas fa-truck" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Delivery Method:</b> {{$post->delivery_method}}</p>
								<p class="mb-4"><i class="fas fa-map-marker-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Locations:</b> {{$post->location}}</p>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Compose Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="/message" method ="post">
                                  @csrf
								  <input type="hidden"
                                      placeholder="Enter r id" 
                                      id="receiver_id"
                                      name="receiver_id"
                                      class="form-control @error('receiver_id') is-invalid @enderror"
                                      value="{{$post->user_id}}"
                                      autocomplete="receiver_id" autofocus
                                      >
                                      @error('receiver_id')
                                          <span class="invalid-feedback" role="alert ">
                                              <strong style="color:red;">{{$message}}</strong>
                                          </span>
                                      @enderror
                                            <textarea 
                                            id="message"
                                            name="message"
                                            class="form-control @error('message') is-invalid @enderror"
                                            value="{{old('message')}}"
											placeholder="Compose Here ..."
                                            autocomplete="message" autofocus
                                            >
                                            </textarea>
                                            @error('message')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror							  
									 
									<div class="modal-footer">
									
								
									<button type="sumbit" class="btn btn-primary"style="background-color:#FFB52E;border:none;"> <i class="far fa-paper-plane"></i> Send</button>
                    </div>
							    </form>
                                 </div>
      
    </div>
  </div>
</div>
								
<!-- end modal -->
							

						  
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
					{!! $post->description !!}	
					</div>
				
			</div>
		</div>
  </div>	
</div>

<div class="container mb-4"> 
	<div class="card">
			<div class="card-header bg-white">
				<h3>More Items </h3>
			</div>
		<div class="card-body">
		<div class="row">

@foreach ($more_posts as $post) 
<div class="col-6 col-md-6 col-lg-3 b-col mt-4">

		  <div class="d-flex product-details ">
		  @if(empty($post->user->avatar))
		  <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
		  @else
			<img src="{{$post->user->avatar}}" class="card-avatar"/>
		  @endif
			  <p style="font-size:.75rem;" class="mt-2 ml-2">{{$post->user->name}}</p>
		  </div> 
			<div class="product-image-wrapper">

			  <div class="single-products">
				  <div class="productinfo">
							
				 <img src="/storage/{{$post->image}}"  style=" height:11rem; width: 100%;
					  object-fit: cover;" alt="" />
					  
					<div class="product-details">
					  <div  style="height:20px; overflow:hidden;">
						  <p style="font-size: 16px;font-weight: 500;">{{$post->product_name}}</p>
					  </div>  
						<p style="font-size:.70rem;"><i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</p>
						<div class="product-bottom-details">
						  <div class="product-price" style="font-size:.75rem;padding-top:4px;">₱ {{number_format($post->price)}}</div>
						  <div class="product-links">
						   
							<a href="/posts/{{$post->id}}"> <p style="font-size:.75rem;">Swap Now</p></a>
						  </div>
						</div>
					  </div>                    
				  </div>
			  </div>
			
			</div>
			
		  </div>
		  @endforeach
		    <div class="container mt-4 mmb-4 text-center">
			{{$more_posts->links()}}
			</div>
 </div>
		</div>
	</div>

</div>
   

        <!-- Modal -->
        <div class="modal fade" id="offer-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Make an Offer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
						  
						
                        @include('offers.create_form')
						
                  </div>
          
              </div>
           </div>
        </div>                                          
     <!-- end modal -->
		
@endsection