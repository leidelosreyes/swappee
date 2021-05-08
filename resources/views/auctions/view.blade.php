@extends('layouts.layout2')
@section('content')
<div class="container">
@if ($message = Session::get('success'))
                                <div class="alert alert-success mt-4">
                                     <p>{{$message}}</p>
                                </div>
                                @endif
<!-- carousel for web view  -->
<div class="d-none d-lg-block">
  <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">    
              <img class="carousel-image" style="height:400px; width:100%; object-fit:cover; " src="{{asset('image/delivery-c-new.jpg')}}" alt="First slide">
              <div class="carousel-caption d-md-block">
              <h1 style="font-family:Copperplate; font-size: 40px;">
                  <span>Swappee</span>
              </h1>
            
              <h3 style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700">Cash Less Transactions for Swap!</h3>
            
              
              <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;margin-top: 15px;">Swapping will make you fell better. </p>
        </div>
      </div>
      <div class="carousel-item ">
        <img class="carousel-image" style="height:400px; width:100%; " src="{{asset('image/new-swap-c.jpg')}}" alt="Second slide">
        <div class="carousel-caption d-md-block">
              <h1 style="font-family:Copperplate; font-size: 40px;">
                  <span>Deliver</span>
              </h1>
              <h3 style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700;margin-top: 15px;">Cash Less Transactions for Swap!</h3>
              
            
              <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;margin-top: 15px;">We deliver your package with love. </p>

        </div>
      
      </div>
      <div class="carousel-item ">
        <img class="carousel-image" style="height:400px; width:100%; " src="{{asset('image/bidding new.jpg')}}" alt="Third slide">
        <div class="carousel-caption d-md-block">
              <h1 style="font-family:Copperplate; font-size: 40px;">
                  <span>Auction</span>
              </h1>
              <h3  style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700">Cash Less Transactions for Swap!</h3>
              <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;margin-top: 15px;">Our auction is fair and competitive, enter at your own risk. </p>

        </div>
      
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
 </div>
</div>
<!-- end carousel for web view  -->
</div>
<div class="container">
                                  @if ($message = Session::get('error'))
									<div class="alert alert-danger mt-4">
										<p>{{$message}}</p>
									</div>
									@endif
	<div class="row">
		<div class="col-sm-5 mt-4 mb-4">
			<div class="card">
				<div class=card-body>
					<div class="view-product">
						<div class="show" href="/storage/{{$auction->image}}" style=" height: 25rem; width: 100%;">
							<img src="/storage/{{$auction->image}}" style="width:100%;height:100%;" id="show-img" > 
						</div>					
					</div>
					<!-- Button trigger modal -->
						
					<!-- End Button -->
				</div> 	
			</div>
		</div>

		<div class="col-sm-7 mt-4 mb-4">
            <div class="card">
			@if(empty($auction->user->avatar))
				  <img src="{{asset('image/user_icon.png')}}" class="card-avatar-view" style="margin-top:-30px;"/>
                  @else
				  <img src="{{$auction->user->avatar}}" class="card-avatar-view" style="margin-top:-30px;"/>
                  @endif
			
				<div class="card-body">
                    
                              
								<!-- web view	 -->
								<div class="d-none d-lg-block">
									<h1>{{$auction->product_name}}</h1>
								</div>
								 <!-- mobile view -->
								<div class="d-sm-block d-md-none">
								  <b>{{$auction->product_name}}</b>
								</div>
								<div class="d-sm-block d-md-none">
								<h5 style="color:#FFB52E;"> PHP {{number_format($auction->estimated_price)}}</h5>
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
								   <h3 style="color:#FFB52E;"> PHP {{number_format($auction->estimated_price)}}</h3>
								</div>
							    
								
								<p><i class="fas fa-user-alt" style="color:#999;"></i><b style="color:#999; font-weight:400;"> Posted by:</b> {{$auction->user->name}}</p>
								
								<hr>
								
														
                            			
								<p><i class="far fa-calendar-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Posted date:</b> <i class="far fa-clock" style="color:green"></i> {{$auction->created_at->diffForHumans()}}</p>
								@if($auction->end_date == date('Y-m-d'))
								<p><i class="far fa-calendar-times"style="color:#999;"></i><b style="color:#999;font-weight:400;"> End date:</b> <i class="far fa-clock" style="color:red"></i> <span style="color:red"> Bid has been ended</span></p>
								@else
								<p><i class="far fa-calendar-times"style="color:#999;"></i><b style="color:#999;font-weight:400;"> End date:</b> <i class="far fa-clock" style="color:red"></i> {{$auction->end_date}}</p>
								@endif
								
								<hr>
								
								<p><i class="fas fa-coins" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Bid Current Price:</b> {{number_format($auction->bidding_start_price)}}</p>
								@if($bidders->count()== 0)
								<p><i class="far fa-play-circle"style="color:#999;"></i><b style="color:#999;font-weight:400;"> Bid Start Price:</b> {{number_format($auction->bidding_start_price)}}</p>
								<p class="mb-4"><i class="fas fa-users" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Bidders:</b> No Bidders Yet </p>
								@endif					
								
		 						<hr>

								 <button class="btn btn-primary " type="button" style="background-color:#FFB52E;border:none;"  data-toggle="modal" data-target="#bid-modal">
									<i class="far fa-comment-alt"></i> Bid now
                                 </button>
							
					     
				</div>
            </div>
        </div>
							

	</div>
</div>
<div class="container">
		<div class="card mb-4 products-section">
			<div class="card-header bg-white">
				<h3>Product Descriptions </h3>
			</div>
			<div class="card-body">
				
					<div class="container">
					{!! $auction->description !!}	
					</div>
				
			</div>
		</div>	
</div>
<div class="container">
		<div class="card mb-4 products-section">
			<div class="card-header bg-white">
				<h3>Bidders </h3>
			</div>
			<div class="card-body">	
						@include('auctions.bidders_table')
						<div class="container mt-4 text-center">
						
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
					  <!-- web view -->
			    <div class="d-none d-lg-block">
				    <img src="/storage/{{$post->image}}"  style=" height:13rem; width: 100%;
					  object-fit: cover;" alt="" />
				</div>
				     <!-- mobile view -->
				<div class="d-sm-block d-md-none">
				  <img src="/storage/{{$post->image}}"  style=" height:6rem; width: 100%;
					  object-fit: cover;" alt="" />
				</div>		
				   <!-- end mobile veiw -->
				
					  
					<div class="product-details">
					  <div  style="height:20px; overflow:hidden;">
						  <p style="font-size: 16px;font-weight: 500;">{{$post->product_name}}</p>
					  </div>  
						<p style="font-size:.70rem;"><i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</p>
						<div class="product-bottom-details">
						  <div class="product-price" style="font-size:.75rem;padding-top:4px;">₱ {{number_format($post->estimated_price)}}</div>
						  <div class="product-links">
						   
							<a href="/auctions/{{$post->id}}"> <p style="font-size:.75rem;">Bid</p></a>
						  </div>
						</div>
					  </div>                    
				  </div>
			  </div>
			
			</div>
			
		  </div>
		  @endforeach
		   
 </div>
		</div>
	</div>
	<div class="container mt-4 mmb-4 text-center">
			{{$more_posts->links()}}
			</div>
</div>
   

        <!-- Modal -->
        <div class="modal fade" id="bid-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bid</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
				<p class="mb-4">Make sure your bid is higher than bid current price <span  style="color:#FFB52E;">( PHP {{number_format($auction->bidding_start_price)}}) </span>  </p>
					<form action="{{route('bidders.store')}}" method="post">
					@csrf
					<div class="form__div">
                                        <input type="number" 
                                        id="amount"
                                        name="amount"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('amount') is-invalid @enderror"
                                        value="{{$auction->bidding_start_price}}"
                                        autocomplete="amount" autofocus
                                        >
                                        <label for="" class="form__label">Enter Your Bid</label></label>
                                         @error('amount')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
									<input type="hidden"
									id="auction_id"
									name="auction_id"
									value={{$auction->id}}
									>
                       
									<button class="btn btn-primary " type="submit" style="background-color:#FFB52E;border:none;"  data-toggle="modal" data-target="#bid-modal">
									<i class="far fa-comment-alt"></i> Bid
                                 </button>
					</form>
						 
                  </div>
          
              </div>
           </div>
        </div>                                          
     <!-- end modal -->
		
@endsection