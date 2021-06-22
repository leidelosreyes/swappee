@extends('layouts.layout2')
@section('content')
<div class="container">
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
	<div class="row">
		<div class="col-sm-5 mt-4 mb-4">
			<div class="card">
				<div class=card-body>
					<div class="view-product">
						<div class="show" href="/storage/{{$post->image}}" style=" height: 25rem; width: 100%;  object-fit: cover;">
							<img src="/storage/{{$post->image}}" style="width:100%;height:100%; object-fit: cover;" id="show-img" > 
						</div>					
					</div>
					<!-- Button trigger modal -->
						<button class="btn btn-primary  mt-4 form-control " type="button" style="background-color:#FFB52E;border:none;"  data-toggle="modal" data-target="#offer-modal">
									Make offer
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
										<a  href="{{route('public_profile_posts.show',$post->user_id)}}"type="button" class="btn btn-outline-info mt-4" style="float:right; margin:5px;">
										<i class="fas fa-user-circle"></i> Visit Profile
										</a>
									</div>
								</div>

								<div class="d-sm-block d-md-none ">
									<div class="mt-4">
										<button type="button" class="btn btn-primary mt-2" style="float:right;background-color:#FFB52E;border:none;" data-toggle="modal" data-target="#exampleModal">
										<i class="far fa-comment-alt"></i>
										</button>
									</div>
									<div class="mt-4">
										<a href="{{route('public_profile_posts.show',$post->user_id)}}" type="button" class="btn btn-outline-info mt-2" style="float:right; margin:5px;">
										<i class="fas fa-user-circle"></i>
										</a>
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
									 
								
									
								
									<button type="sumbit" class="btn btn-primary form-control mt-4"style="background-color:#FFB52E;border:none;"> <i class="far fa-paper-plane"></i> Send</button>
                  
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
			  <p style="font-size:.75rem;overflow:hidden;" class="mt-2 ml-2">{{$post->user->name}}</p>
		  </div> 
			<div class="product-image-wrapper">

			  <div class="single-products">
				  <div class="productinfo">
							
				  <!-- web view -->
				  <div class="d-none d-lg-block">
                              <img src="/storage/{{$post->image}}"  style=" height:12rem; width: 100%;
                              object-fit: cover;" alt="" />
                          </div>
                              <!-- mobile view -->
                          <div class="d-sm-block d-md-none">
                            <img src="/storage/{{$post->image}}"  style=" height:7rem; width: 100%;
                              object-fit: cover;" alt="" />
                          </div>		
                           <!-- end mobile veiw -->
                              
					  
					<div class="product-details">
					  <div  style="height:20px; overflow:hidden;">
						  <p style="font-size: 16px;font-weight: 500;">{{$post->product_name}}</p>
					  </div>  
						<p style="font-size:.70rem;"><i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</p>
						<div class="product-bottom-details">
						  <div class="product-price" style="font-size:.75rem;padding-top:4px;">₱ {{number_format($post->price)}}</div>
						  <div class="product-links">
						   
							<a href="/posts/{{$post->id}}"> <p style="font-size:.75rem;">Swap</p></a>
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
                <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
						  
						
                            
              
                <form action="/offers" method ="post" enctype="multipart/form-data">
                                   @csrf
                            <div class="form-group row">
                                      <input type="hidden"
                                      placeholder="Enter r id" 
                                      id="receiver_id"
                                      name="receiver_id"
                                      class="form-control @error('receiver_id') is-invalid @enderror"
                                      value="{{$post->user->id}}"
                                      autocomplete="receiver_id" autofocus
                                      >
                                      @error('receiver_id')
                                          <span class="invalid-feedback" role="alert ">
                                              <strong style="color:red;">{{$message}}</strong>
                                          </span>
                                      @enderror

                            </div>
                            <div class="form-group row">
                                      <input type="hidden"
                                      placeholder="Enter r id" 
                                      id="post_id"
                                      name="post_id"
                                      class="form-control @error('post_id') is-invalid @enderror"
                                      value="{{$post_id}}"
                                      autocomplete="post_id" autofocus
                                      >
                                      @error('post_id')
                                          <span class="invalid-feedback" role="alert ">
                                              <strong style="color:red;">{{$message}}</strong>
                                          </span>
                                      @enderror
                            </div>
                            <div class="form__div">
                                        <input type="text" 
                                        id="product_name"
                                        name="product_name"
                                        style="height:60px;"
                                        class="form__input form-control @error('product_name') is-invalid @enderror"
                                        value="{{old('product_name')}}"
                                        autocomplete="product_name" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Product Name <label style="color:red;">*</label></label>
                                        @error('product_name')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
                                    </div>
                             
                                    <div class="form__div">
                                        <input type="number" 
                                        id="price"
                                        name="price"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('price') is-invalid @enderror"
                                        value="{{old('price')}}"
                                        autocomplete="price" autofocus
                                        >
                                        <label for="" class="form__label">Price <label style="color:red;">*</label></label>
                                         @error('price')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                   @if($post->delivery_method=="Meet Up")
                                    <div class="form__div">
                                      <select id="inputState" 
                                      readonly
                                      id="delivery_method"
                                      name="delivery_method"
                                      style="height:60px;"
                                      class="form-control form__input @error('delivery method') is-invalid @enderror"
                                      value="{{old('delivery_method')}}"
                                      autocomplete="delivery_method" autofocus
                                            >
                                            <option>{{$post->delivery_method}}</option>
                                            
                                            
                                            </select>
                                      @error('delivery_method')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                      @enderror
                                       <label for="" class="form__label"style="background:none;">Delivery Method <label style="color:red;">*</label></label>    
                                  </div>
                                  <div class="form__div">
                                        <input type="text"
                                         readonly
                                         id="location"
                                         name="location"
                                         placeholder=" "
                                         style="height:60px;"
                                         class="form-control form__input @error('location') is-invalid @enderror"
                                         value="{{$post->location}}"
                                         autocomplete="location" autofocus
                                        >
                                        <label for="" class="form__label" style="background:none;">Location <label style="color:red;">*</label></label>
                                        @error('location')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;" >{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                    @endif
                                    @if($post->delivery_method=="Delivery")
                                    <div class="form__div">
                                      <select id="inputState" 
                                      readonly
                                      id="delivery_method"
                                      name="delivery_method"
                                      style="height:60px;"
                                      class="form-control form__input @error('delivery method') is-invalid @enderror"
                                      value="{{old('delivery_method')}}"
                                      autocomplete="delivery_method" autofocus
                                            >
                                            <option>{{$post->delivery_method}}</option>
                                            
                                            
                                            </select>
                                      @error('delivery_method')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                      @enderror
                                       <label for="" class="form__label"style="background:none;">Delivery Method <label style="color:red;">*</label></label>    
                                  </div>
                                  <div class="form__div">
                                        <input type="text"
                                       
                                         id="location"
                                         name="location"
                                         placeholder=" "
                                         style="height:60px;"
                                         class="form-control form__input @error('location') is-invalid @enderror"
                                         value="{{$user->address}}"
                                         autocomplete="location" autofocus
                                        >
                                        <label for="" class="form__label" style="background:none;">Location <label style="color:red;">*</label></label>
                                        @error('location')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;" >{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                    @endif
                                    <label  for="image" style="margin-bottom:0;">Product Description <label style="color:red;">*</label></label>
                                        <textarea 
                                                id="description"
                                                name="description"
                                                class="form-control form_input @error('description') is-invalid @enderror"
                                                value="{{old('description')}}"
                                                placeholder="Enter Product Description ..."
                                                autocomplete="description" autofocus
                                                >
                                                </textarea>
                                               
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert ">
                                                        <strong style="color:red;">{{$message}}</strong>
                                                    </span>
                                                @enderror

                                  
                                                <label class="mt-4" for="image" style="margin-bottom:0;">Post Image <label style="color:red;">*</label></label>
                                            <div class="card mt-0">
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col">
                                                          
                                                             <input type="file"name="image" class="file" accept="image/*" style="visibility: hidden;position: absolute;">
                                                           <div class="input-group my-3">
                                                             <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                                             <div class="input-group-append">
                                                              <button type="button" class="browse btn btn-primary" style="background-color: #FFB52E;border:none;">Browse...</button>
                                                             </div>
                                                            </div>
                                                          
                                                        </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div style="text-align:center;">
                                                    <img src="" id="preview" class="img-thumbnail" style="width:30%; border:none;">
                                                    </div>
                                                </div>
                                            </div>
                                              @error('image')
                                                  
                                                          <p style="color:red;">{{$message}}</p>
                                                    
                                              @enderror 
                                             
                                                    <button type="sumbit" class="btn btn-primary mt-4"style="background-color:#FFB52E;border:none;"> <i class="far fa-paper-plane"></i> Send Offer</button>  
                                              

                                            
                                            

                        </form>   
                  
                 
						
                  </div>
          
              </div>
           </div>
        </div>                                          
     <!-- end modal -->
		
@endsection