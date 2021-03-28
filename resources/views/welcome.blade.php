@extends('layouts.layout1')
@section('content')
@include('slider.slider')
<section class="container">
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
        @forelse($posts as $post)
				   @empty
           <img src="{{asset('/image/x-error-removebg-preview.png')}}" style=" height: 150px; width:150px; margin-top:100px;" class="center-img" id="show-img" > 
            <h3 style="text-align:center;"><i class="fas fa-exclamation-triangle" style="color:red;"></i> No Matched Found</h3>
           @endforelse  
         
                 	
<div class="container ">
  <div class="row">

        @foreach ($posts as $post) 
        <div class="col-6 col-md-4 col-lg-3 b-col mt-4">

                  <div class="d-flex product-details ">
                  @if(empty($post->user->avatar))
                  <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                  @else
                    <img src="{{$post->user->avatar}}" class="card-avatar"/>
                  @endif
                      <p style="font-size:.75rem;" class="mt-2 ml-2">{{$post->user->name}}</p>
                  </div> 
                    <div class="product-image-wrapper">

                      <div class="single-products">
                          <div class="productinfo">
                                    
                         <img src="/storage/{{$post->image}}"  style=" height: 10rem; width: 100%;
                              object-fit: cover;" alt="" />
                              
                            <div class="product-details">
                              <div  style="height:20px; overflow:hidden;">
                                  <p style="font-size: 16px;font-weight: 500;">{{$post->product_name}}</p>
                              </div>  
                                <p style="font-size:.70rem;"><i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</p>
                                <div class="product-bottom-details">
                                  <div class="product-price" style="font-size:.75rem;padding-top:4px;">₱ {{$post->price}}</div>
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

</section>
<section class="about-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex">
        <div class="about-img">
          <img class="img-fluid" src="image/about_img.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-6 order-first order-lg-last">
        <div class="section-title">
          <!--About title Start!-->
          <h2 class="title">Swappee</h2>
          <h1 class="sub-title">Trade what you want in swappee</h1>  
        </div>

        <div class="about-content">
          <p>Acknowledging the online barter gives us a better insight in use of digital transactions, in times the integrity of the process have been obstructed by the other users because of the platforms that was used doesn’t have those processes that maintains its integrity.</p>
          <ul class="list-unstyled"> 
            <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container ">
    <h4> Our Services </h4>
  </div>
  <div class="card-body">
  <section class="features-section bg-light">
  <div class="container ">
    <div class="row justify-content-center">
    
      <div>
        <!--Features title Start!-->
      </div>
    </div>
    <div class="row">

        <!--Features  Item!-->
        <div class="col-6 col-md-6 col-lg-4 b-col d-flex">
          <div class="col-lg-12 features-item" style="margin-bottom: 20px;">
            <div class="icon"><i class="fa fa-truck"></i></div>
            <h3>Delivery</h3>
            <p>We deliver your package with love.</p>
          </div>
        </div>
        <!--end!-->
        <div class="col-6 col-md-6 col-lg-4 b-col d-flex">
          <div class="col-lg-12 features-item" style="margin-bottom: 20px;">
            <div class="icon"><i class="fa fa-sync"></i></div>
            <h3>Swap</h3>
            <p>Swapping will make you feel better.</p>
          </div>
        </div>
        <!--end!-->
        <div class="col-6 col-md-6 col-lg-4 b-col d-flex">
          <div class="col-lg-12 features-item" style="margin-bottom: 20px;">
            <div class="icon"><i class="fa fa-gavel"></i></div>
            <h3>Auction</h3>
            <p>Our auction is fair and competitive</p>
          </div>
        </div>
        <!--end!--> 
</section>
</div>
</section>



<!--Product Section for swap Start!-->

@endsection