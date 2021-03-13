@extends('layouts.userbase1')
    @section('content')

    <section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Menu</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<!-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Categories
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Nike </a></li>
											<li><a href="">Under Armour </a></li>
											<li><a href="">Adidas </a></li>
											<li><a href="">Puma</a></li>
											<li><a href="">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div> -->
						
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
    <h2 class="title text-center">Post Item</h2>
    <div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							
						</div>
						<div class="tab-content">
							
							
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									
									
                                <form action="/auctions" method ="post" enctype="multipart/form-data">
            @csrf
         <div class="col-8 offset-2">
                    <div class="row">
                       
                    </div>
                        <div class="form-group row">
                                    <label>Items Name </label><label style="color:red; padding-left:10px;"> *</label>
                                    <input type="text" 
                                    id="product_name"
                                    name="product_name"
                                    class="form-control @error('product_name') is-invalid @enderror"
                                    value="{{old('product_name')}}"
                                    autocomplete="product_name" autofocus
                                    placeholder="Please Enter Item Name"
                                    >
                                   
                                    @error('product_name')
                                        <span class="invalid-feedback" role="alert ">
                                            <strong style="color:red;">{{$message}}</strong>
                                        </span>
                                    @enderror

                        </div>
						<div class="form-group row">
                                    <label>Estimated Price</label><label style="color:red; padding-left:10px;"> *</label>
                                    <input type="number" 
                                    id="estimated_price"
                                    name="estimated_price"
                                    class="form-control @error('estimated_price') is-invalid @enderror"
                                    value="{{old('estimated_price')}}"
                                    autocomplete="estimated_price" autofocus
                                    placeholder="Please Enter Estimated Price"
                                    >
                                    @error('estimated_price')
                                        <span class="invalid-feedback" role="alert ">
                                            <strong style="color:red;">{{$message}}</strong>
                                        </span>
                                    @enderror

                        </div>
                        <div class="form-group row">
                                    <label>Start Bidding Price</label><label style="color:red; padding-left:10px;"> *</label>
                                    <input type="number" 
                                    id="bidding_start_price"
                                    name="bidding_start_price"
                                    class="form-control @error('bidding_start_price') is-invalid @enderror"
                                    value="{{old('bidding_start_price')}}"
                                    autocomplete="bidding_start_price" autofocus
                                    placeholder="Please Enter Start Bidding Price"
                                    >
                                    @error('bidding_start_price')
                                        <span class="invalid-feedback" role="alert ">
                                            <strong style="color:red;">{{$message}}</strong>
                                        </span>
                                    @enderror

                        </div>
                        <div class="form-group row">
                                    <label>End Date</label><label style="color:red; padding-left:10px;"> *</label>
                                    <input type="date" 
                                    id="end_date"
                                    name="end_date"
                                    class="form-control @error('end_date') is-invalid @enderror"
                                    value="{{old('end_date')}}"
                                    autocomplete="end_date" autofocus
                                    >
                                    @error('end_date')
                                        <span class="invalid-feedback" role="alert ">
                                            <strong style="color:red;">{{$message}}</strong>
                                        </span>
                                    @enderror

                        </div>
                        <div class="row">
                                    <label>Location</label><label style="color:red; padding-left:10px;"> *</label>
                                    <input type="text" 
                                    id="location"
                                    name="location"
                                    class="form-control @error('location') is-invalid @enderror"
                                    value="{{old('location')}}"
                                    autocomplete="location" autofocus
                                    >
                                    @error('location')
                                        <span class="invalid-feedback" role="alert ">
                                            <strong style="color:red;" >{{$message}}</strong>
                                        </span>
                                    @enderror
                        </div>
                <div class="row">
                                    <label>Description</label><label style="color:red; padding-left:10px;"> *</label>
                                    <textarea type="text" 
                                    id="description"
                                    name="description"
									rows="3"
                                    class="@error('description') is-invalid @enderror"
                                    value="{{old('description')}}"
                                    autocomplete="description" autofocus
                                    >
                                    </textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert ">
                                            <strong style="color:red;">{{$message}}</strong>
                                        </span>
                                    @enderror
                </div>

                        
                        <div class="row">

                                <label for="image">Post Image</label><label style="color:red; padding-left:10px;"> *</label>
                                <input type="file" name="image" id="image" class="form-control-file">
                            </div>
                                @error('image')
                                    <strong style="color:red;">{{$message}}</strong>
                                @enderror
                                <div class="row pt-4 p">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                 </form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->					
</div>
 </section>






    
    

@endsection