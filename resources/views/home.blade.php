@extends('layouts.layout2')

@section('content')
<section class="products-section ">

<div class="container ">
<h2 class="title text-center">Available for Swap</h2>
<div class="row">
        @foreach ($posts as $post) 
        <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                          <div class="productinfo text-center">
                                                  
                          <a href="/posts/{{$post->id}}"><img src="/storage/{{$post->image}}" alt="" /></a>
                            <div class="product-details">
                                
                            <div class="product-price">{{$post->product_name}}</div>
                                <p>{{$post->description}}</p>
                                <div class="product-bottom-details">
                                  <div class="product-price">{{$post->delivery_method}}</div>
                                  <div class="product-links">
                                   
                                    <a href="/posts/{{$post->id}}"><i class="fa fa-sync"></i></a>
                                  </div>
                                </div>
                              </div>                    
                          </div>
                      </div>
                    
                    </div>
                    
                  </div>
                  @endforeach
         </div>
</div>
<div class="container">{{$posts->links()}}</div>
  </section>

<div class="container">
   
      
	   @forelse($posts as $post)
				   @empty
				   <div class="step-one">
				<h2 class="heading">Result</h2>
			</div>
			<div class="checkout-options">
				
				<strong>No matched Found</strong>
				
				<a href="{{ url('/home') }}" style="font-size:15px; color: #696763;" class="text-sm text-gray-700 underline"><i class="fas fa-home"></i> Back to Home</a>
				
			</div>
			<div class="register-req">
				<p>Please make sure your spelling is correct</p>
			</div>
		@endforelse
      
    
</div>

@endsection



