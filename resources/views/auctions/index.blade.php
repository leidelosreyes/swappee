@extends('layouts.userbase1')

@section('content')
<div class="container">
	<h2 class="title text-center">Auction Items</h2>	
        @foreach ($auctions as $auction)
        <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
                                            
											<img src="/storage/{{$auction->image}}" alt="" />
											<h2>{{$auction->product_name}}</h2>
											
                                            <a href="/auctions/{{$auction->id}}" class="btn btn-default add-to-cart"><i class="fa fa-sync"></i>Bid Now</a>                    
                                        </div>
                                       
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
            @endforeach
        </div>
		

</div>

       
@endsection



