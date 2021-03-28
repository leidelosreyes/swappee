@extends('layouts.layout2')
@section('content')



<div class="container">
	<div class="row">
		<!-- <div class="col-sm-2 mt-4">
			 <div class="card">
				 <div class="panel-body">
				 <div class="text-left">
                          <a href=""><p class="">make offer</p></a>
                          <a href=""><p class="font-15">report </p></a>
                         
                          <hr>
                          
                        </div>
				 </div>
			 </div>
		</div> -->
		<div class="col-sm-5 mt-4 mb-4 mr-4 ml-4">
			<div class="card">
				<div class=card-body>
					<div class="view-product">
						<div class="show" href="/storage/{{$post->image}}" style=" height: 25rem; width: 100%;">
							<img src="/storage/{{$post->image}}" class="w-100" id="show-img" > 
						</div>					
					</div>
					<!-- <button type="submit" style="background-color:#FFB52E; border:none;" class="btn btn-primary mt-2 block">Make Offer</button> -->
				</div> 
				
			</div>
		</div>

		<div class="col-sm-6 mt-4 mb-4 products-section">
            <div class="card">
			@if(empty($post->user->avatar))
				  <img src="{{asset('image/user_icon.png')}}" class="card-avatar-view" style="margin-top:-30px;"/>
                  @else
				  <img src="{{$post->user->avatar}}" class="card-avatar-view" style="margin-top:-30px;"/>
                  @endif
				<div class="card-body">
                    
                            
				<h1>{{$post->product_name}}</h1>
								
								<hr>
							    <h3 style="color:#FFB52E;"> PHP {{$post->price}}</h3>
								<p><i class="fas fa-user-alt" style="color:#999;"></i><b style="color:#999; font-weight:400;"> Posted by:</b> {{$post->user->name}}</p>
								
								<hr>
								
														
                                <p><i class="fas fa-sync-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Wish to Swap:</b> {{$post->wishitem}}</p>								
								<p><i class="far fa-calendar-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Posted date:</b> <i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</p>
								<hr>
							
                                <p><i class="fas fa-truck" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Delivery Method:</b> {{$post->delivery_method}}</p>
								<p><i class="fas fa-map-marker-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Locations:</b> {{$post->location}}</p>
								<!-- <form action="">
                              <textarea name="" id=""  class="form-control mb-2" rows="5"></textarea>
							  <button type="submit" class="btn btn-primary">Send Message</button>  
							  </form> -->

						   </textarea>
				</div>
            </div>
        </div>
							

	</div>
</div>
<div class="container">
 <div class="col-md-12 ml-1 mr-0">
	<div class="card mb-4 products-section">
		<div class="card-header bg-white">
			<h3>Porduct Descriptions</h3>
		</div>
		<div class="card-body">
			
				<div class="container">
				{!! $post->description !!}	
				</div>
			
		</div>
	</div>
 </div>	
</div>

@endsection