@extends('layouts.layout2')

@section('content')



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
                          <hr>
                          <div class="container">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">Second Hand </p>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">new </p>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">old </p>
                          </div>
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
                               @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                     <p>{{$message}}</p>
                                </div>
                                @endif
        @forelse($posts as $post)
				   @empty
           <img src="{{asset('/image/x-error-removebg-preview.png')}}" style=" height: 150px; width:150px; margin-top:100px;" class="center-img" id="show-img" > 
            <h3 style="text-align:center;"><i class="fas fa-exclamation-triangle" style="color:red;"></i> No Matched Found</h3>
           @endforelse  
         
                 	
<div class="container ">
  <div class="row">

        @foreach ($posts as $post) 
        <div class="col-sm-3 mt-4">

       
        
                    <div class="product-image-wrapper">
                      <div class="single-products">
                          <div class="productinfo text-center">
                                                  
                         <img src="/storage/{{$post->image}}"  style=" height: 10rem; width: 100%;
                              object-fit: cover;" alt="" />
                              <img src="{{$post->user->avatar}}" class="card-avatar"/>
                            <div class="product-details">
                                <p style="font-weight:700;">{{$post->product_name}}</p>
                                <p style="font-size:.70rem;"><i class="far fa-clock"></i> {{$post->created_at}}</p>
                                <div class="product-bottom-details">
                                  <div class="product-price" style="font-size:.90rem;">₱{{$post->price}}</div>
                                  <div class="product-links">
                                   
                                    <a href="/posts/{{$post->id}}"> <p style="font-size:.75rem;">Swap Now</p></a>
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

</div>
</div>
@endsection



