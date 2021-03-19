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
		<div class="col-sm-6 mt-4 mb-4 ">
			<div class="card">
				<div class=card-body>
					<div class="view-product">
						<div class="show" href="/storage/{{$post->image}}" style=" height: 25rem; width: 100%;">
							<img src="/storage/{{$post->image}}" class="w-100" id="show-img" > 
						</div>					
					</div>
					<button type="submit" style="background-color:#FFB52E; border:none;" class="btn btn-primary mt-2 block">Make Offer</button>
				</div> 
				
			</div>
		</div>

		<div class="col-sm-6 mt-4 mb-4 products-section">
            <div class="card">
			<img src="{{$post->user->avatar}}" class="card-avatar" style="margin-top:-30px;"/>
				<div class="card-body">
                    
                            
								<h4>{{$post->product_name}}</h4><br>
								<p><i class="fas fa-user-alt" style="color:#999;"></i><b style="color:#999; font-weight:400;"> Posted by:</b> {{$post->user->name}}</p>
								<hr>
								
								<p><i class="fas fa-money-bill" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Price:</b> ₱{{$post->price}}</p>								
                                <p><i class="fas fa-tags" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Item Description:</b> {{$post->description}}</p>								
                                <p><i class="fas fa-sync-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Wish to Swap:</b> {{$post->wishitem}}</p>								
								<p><i class="fas fa-map-marker-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Locations:</b> {{$post->location}}</p>
								<p><i class="far fa-calendar-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Posted date:</b> {{$post->created_at}}</p>
								<hr>
							
                                <p><i class="fas fa-truck" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Delivery Method:</b> {{$post->delivery_method}}</p>
								<form action="">
                              <textarea name="" id=""  class="form-control mb-2" rows="5"></textarea>
							  <button type="submit" class="btn btn-primary">Send Message</button>  
							  </form>

						   </textarea>
				</div>
            </div>
        </div>
							

	</div>
</div>
@endsection