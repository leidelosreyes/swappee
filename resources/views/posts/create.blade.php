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
									
									
                                <form action="/posts" method ="post" enctype="multipart/form-data">
            @csrf
         <div class="col-8 offset-2">
                    <div class="row">
                       
                    </div>
                        <div class="form-group row">
                                    <label>Item Name</label>
                                    <input type="text" 
                                    id="product_name"
                                    name="product_name"
                                    class="form-control @error('product_name') is-invalid @enderror"
                                    value="{{old('product_name')}}"
                                    autocomplete="product_name" autofocus
                                    >
                                    @error('product_name')
                                        <span class="invalid-feedback" role="alert ">
                                            <strong style="color:red;">{{$message}}</strong>
                                        </span>
                                    @enderror

                        </div>
                        <div class="form-group row">
                                    <label>Price</label>
                                    <input type="number" 
                                    id="price"
                                    name="price"
                                    class="form-control @error('price') is-invalid @enderror"
                                    value="{{old('price')}}"
                                    autocomplete="price" autofocus
                                    >
                                    @error('price')
                                        <span class="invalid-feedback" role="alert ">
                                            <strong style="color:red;">{{$message}}</strong>
                                        </span>
                                    @enderror

                        </div>
						<div class="form-group row">
                                    <label>Wish To Swap</label>
                                    <input type="text" 
                                    id="wishitem"
                                    name="wishitem"
                                    class="form-control @error('wishitem') is-invalid @enderror"
                                    value="{{old('wishitem')}}"
                                    autocomplete="wishitem" autofocus
                                    >
                                    @error('wishitem')
                                        <span class="invalid-feedback" role="alert ">
                                            <strong style="color:red;">{{$message}}</strong>
                                        </span>
                                    @enderror

                        </div>
						<div class="form-group row">
                                    <label>Delivery Method</label>
                                    <select type="text" 
                                    id="delivery_method"
                                    name="delivery_method"
                                    class="form-control  @error('delivery method') is-invalid @enderror"
                                    value="{{old('delivery_method')}}"
                                    autocomplete="delivery_method" autofocus
                                    >
									<option>Meet Up</option>
									<option>Delivery</option>
									
									</select>
                                    @error('delivery_method')
                                        <span class="invalid-feedback" role="alert ">
                                            <strong style="color:red;">{{$message}}</strong>
                                        </span>
                                    @enderror

                        </div>
                        <div class="row">
                                    <label>Location</label>
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
                                    <label>Description</label>
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

                                <label for="image">Post Image</label>
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