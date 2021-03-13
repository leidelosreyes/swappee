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
                            <div class="show" href="/storage/{{$post->image}}">
                          <img src="/storage/{{$post->image}}" class="w-100" id="show-img">
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
							<div class="product-information"><!--/product-information-->
                                 <img src="" class="newarrival" alt="" />  
								<h2>{{$post->product_name}}</h2>
								<p><i class="fas fa-user-alt"></i><b> Posted by:</b> {{$post->user->name}}</p>
								<img src="" alt="" />
                                <p><i class="fas fa-tags"></i><b> Item Description:</b> {{$post->description}}</p>
                                <p><i class="fas fa-sync-alt"></i><b> Wish to Swap:</b> {{$post->wishitem}}</p>
								<p><i class="fas fa-map-marker-alt"></i><b> Locations:</b> {{$post->location}}</p>
								
								<p><i class="far fa-calendar-alt"></i><b> Posted date:</b> {{$post->created_at}}</p>
								<img src="" alt="" />
                                <p><i class="fas fa-truck"></i><b> Delivery Method:</b> {{$post->delivery_method}}</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					
					
				</div>
			</div>
		</div>
	</section>
@endsection