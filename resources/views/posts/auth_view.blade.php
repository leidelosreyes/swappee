@extends('layouts.layout2')
@section('content')




	<div class="row">
		<div class="col-sm-5 mt-4 mb-4">
			<div class="card">
				<div class=card-body>
					<div class="view-product">
						<div class="show" href="/storage/{{$post->image}}" style=" height: 25rem; width: 100%;">
							<img src="/storage/{{$post->image}}" style="width:100%;height:100%;" id="show-img" > 
						</div>					
					</div>	
				</div> 	
			</div>
		</div>

		<div class="col-sm-7 mt-4 mb-4">
            <div class="card">
				<div class="card-body">
                    
                              
								<h1>{{$post->product_name}}</h1>
								<hr>
							    <h3 style="color:#FFB52E;"> PHP {{number_format($post->price)}}</h3>
								<p><i class="fas fa-user-alt" style="color:#999;"></i><b style="color:#999; font-weight:400;"> Posted by:</b> {{$post->user->name}}</p>
								
								<hr>
								
														
                                <p><i class="fas fa-sync-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Wish to Swap:</b> {{$post->wishitem}}</p>								
								<p><i class="far fa-calendar-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Posted date:</b> <i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</p>
								<hr>
								
                                <p><i class="fas fa-truck" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Delivery Method:</b> {{$post->delivery_method}}</p>
								<p class="mb-4"><i class="fas fa-map-marker-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Locations:</b> {{$post->location}}</p>					  
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
@endsection