@extends('layouts.layout2')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">    
            <img class="carousel-image" style="height:500px; width:100%; " src="{{asset('image/swap-c.jpg')}}" alt="First slide">
            <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Swappee</span>
            </h1>
          
            <h3 style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700">Cash Less Transactions for Swap!</h3>
          
             <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box" type="search" name="search" placeholder="Search" aria-label="Search">

   					    </form>
             <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;margin-top: 15px;">Swapping will make you fell better. </p>
      </div>
    </div>
    <div class="carousel-item ">
      <img class="carousel-image" style="height:500px; width:100%; " src="{{asset('image/delivery-c.jpg')}}" alt="Second slide">
      <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Deliver</span>
            </h1>
            <h3 style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700;margin-top: 15px;">Cash Less Transactions for Swap!</h3>
            <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box" type="search" name="search" placeholder="Search" aria-label="Search">

   					    </form>
           
             <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;margin-top: 15px;">We deliver your package with love. </p>

      </div>
    
    </div>
    <div class="carousel-item ">
      <img class="carousel-image" style="height:500px; width:100%; " src="{{asset('image/bidding.jpg')}}" alt="Third slide">
      <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Auction</span>
            </h1>
             <h3  style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700">Cash Less Transactions for Swap!</h3>
             
             <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box" type="search" name="search" placeholder="Search" aria-label="Search">

   					    </form>

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






<div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- meta -->
                
                    <h2 class="title text-center">Available for Swap</h2>
                   
                
                <!--/ meta -->
            </div>
        </div>


<div class="row">
            <div class="col-xl-3">
                <!-- Personal-Information -->
                <div class="card-box">
                    <h4 class="header-title mt-0">Categories</h4>
                    <div class="panel-body">
                        
                        <hr>
                        
                        <div class="text-left">
                          <a href=""><p class="">Electronic Devices</p></a>
                          <a href=""><p class="font-15">Appliances </p></a>
                          <a href=""><p class="font-15">Home & living </p></a>
                          <a href=""><p class="font-15">Fashion </p></a>
                          <a href=""><p class="font-15">Sports & lifestyle </p></a>
                          <a href=""><p class="font-15">Toys </p></a>
                          <a href=""><p class="font-15">Antiques </p></a>
                          <a href=""><p class="font-15">Others </p></a>
                          
                        </div>
                        <ul class="social-links list-inline mt-4 mb-0">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
</div>

<section class="products-section col-xl-9 mb-4">

<div class="container ">
<div class="row">
        @foreach ($posts as $post) 
        <div class="col-sm-3 mt-4">

       
        
                    <div class="product-image-wrapper">
                      <div class="single-products">
                          <div class="productinfo text-center">
                                                  
                         <img src="/storage/{{$post->image}}" class="mt-3" style=" height: 10rem; width: 10rem;
                              object-fit: cover;" alt="" />
                            <div class="product-details">
                                <p style="font-weight:700;">{{$post->product_name}}</p>
                                <p style="font-size:.70rem;">{{$post->created_at}}</p>
                                <div class="product-bottom-details">
                                  <div class="product-price" style="font-size:.90rem;">₱{{$post->price}}</div>
                                  <div class="product-links">
                                   
                                    <a href="/posts/{{$post->id}}"> <p style="font-size:.90rem;">Swap Now</p></a>
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
</div>
</div>
@endsection



