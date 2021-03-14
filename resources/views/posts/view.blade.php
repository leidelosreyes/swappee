@extends('layouts.layout2')
@section('content')



<div class="container">
	<div class="row">
		<div class="col-sm-2 mt-4">
			 <div class="card">
				 <div class="body">
						gg
				 </div>
			 </div>
		</div>
		<div class="col-sm-5 mt-4 mb-4">
			<div class="card">
				<div class=card-body>
					<div class="view-product">
						<div class="show" href="/storage/{{$post->image}}" style=" height: 25rem; width: 100%;">
							<img src="/storage/{{$post->image}}" class="w-100" id="show-img" > 
						</div>					
					</div>
				</div> 
			</div>
		</div>

		<div class="col mt-4 mb-4">
            <div class="card">
				<div class="card-body">
                    
                            
								<h4 style=" text-align: center;  background:whitesmoke;">{{$post->product_name}}</h4><br>
								<p><i class="fas fa-user-alt" style="color:#999;"></i><b style="color:#999;"> Posted by:</b> {{$post->user->name}}</p>
								<hr>
								
								<p><i class="fas fa-money-bill" style="color:#999;"></i><b style="color:#999;"> Price:</b> ₱{{$post->price}}</p>								
                                <p><i class="fas fa-tags" style="color:#999;"></i><b style="color:#999;"> Item Description:</b> {{$post->description}}</p>								
                                <p><i class="fas fa-sync-alt" style="color:#999;"></i><b style="color:#999;"> Wish to Swap:</b> {{$post->wishitem}}</p>								
								<p><i class="fas fa-map-marker-alt" style="color:#999;"></i><b style="color:#999;"> Locations:</b> {{$post->location}}</p>
								<p><i class="far fa-calendar-alt" style="color:#999;"></i><b style="color:#999;"> Posted date:</b> {{$post->created_at}}</p>
								<hr>
							
                                <p><i class="fas fa-truck" style="color:#999;"></i><b style="color:#999;"> Delivery Method:</b> {{$post->delivery_method}}</p>
								
                           
				</div>
            </div>
        </div>
							

	</div>
</div>
@endsection