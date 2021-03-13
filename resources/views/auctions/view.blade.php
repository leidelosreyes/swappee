@extends('layouts.userbase1')
@section('content')
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Menu</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						
						
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{route('posts.create')}}"><i class="fas fa-plus-circle"></i> Add Items</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><i class="fas fa-gavel"></i> Auction</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><i class="fas fa-user-edit"></i> Edit Profile</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><i class="fas fa-key"></i> Change Password</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><i class="fas fa-archive"></i> My Items</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><i class="fas fa-comments"></i> Messages</a></h4>
								</div>
							</div>
						
						
						</div><!--/category-products-->
					
					
						
					
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
                <h2 class="title text-center">Item Details</h2>	
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
                            <div class="show" href="/storage/{{$auction->image}}">
                          <img src="/storage/{{$auction->image}}" class="w-100" id="show-img">
                        </div>
								<!-- <img src="" alt="" /> -->
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <!-- <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a> -->
										</div>
										<div class="item">
										  <!-- <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a> -->
										</div>
										<div class="item">
										  <!-- <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a> -->
										</div>
										
									</div>

								  <!-- Controls -->
								
							</div>

						</div>
						<div class="col-sm-7">
							<div class="formgroup">
							<div class="product-information"><!--/product-information-->
                                 <img src="" class="newarrival" alt="" />  
								<h2>{{$auction->product_name}}</h2>
								<p><i class="fas fa-user-alt"></i><b> Vendor:</b> {{$auction->user->name}}</p>
								<img src="" alt="" />
                                <p><i class="fas fa-layer-group"></i><b> Item Description:</b> {{$auction->description}}</p>
                                <p><i class="fas fa-hand-holding-usd"></i><b> Estimated Price:</b> {{$auction->estimated_price}}</p>
								<p id="sprice"><i class="fas fa-gavel"></i><b> Bidding Start Price:</b> {{$auction->bidding_start_price}}</p>
								
								<p><i class="far fa-calendar-alt"></i><b> Posted date:</b> {{$auction->created_at}}</p>
								<img src="" alt="" />
                                <p style="color: red;"><i class="fas fa-truck" style="color: #696763;"></i><b style="color: #696763;"> End of Auction:</b> {{$auction->end_date}}</p>

								<form id="add">
								<input type="number" name="iprice" id="iprice"class="form-control" placeholder="Enter price" aria-label="Recipient's username" aria-describedby="button-addon2">
  								<input type="hidden"  id="price"value="{{$auction->bidding_start_price}}">
								</input> 
								<button class="btn-primary" type="submit" id="button-addon2" style="height:35px;  border-radius:4px; border:none; background: #FE980F;">Bid Now</button>
								  </form>
								  </div>
								</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					
					
				</div>
			</div>
		</div>
	</section>


@endsection