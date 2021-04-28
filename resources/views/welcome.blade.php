@extends('layouts.layout1')
@section('content')

@include('layouts.carousel')

<div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h2 class="title text-center">Categories</h2>
            </div>
        </div>
</div>
<div class="container">
@include('slider.slider')
</div>

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
                                    
                          <!-- web view -->
                          <div class="d-none d-lg-block">
                          <a href="/posts/{{$post->id}}"><img src="/storage/{{$post->image}}"  style=" height:12rem; width: 100%;
                              object-fit: cover;" alt="" /></a>
                          </div>
                              <!-- mobile view -->
                          <div class="d-sm-block d-md-none">
                          <a href="/posts/{{$post->id}}"><img src="/storage/{{$post->image}}"  style=" height:7rem; width: 100%;
                              object-fit: cover;" alt="" /></a>
                          </div>		
                           <!-- end mobile veiw -->
                              
                              
                            <div class="product-details">
                              <div  style="height:20px; overflow:hidden;">
                                  <p style="font-size: 16px;font-weight: 500;overflow:hidden;">{{$post->product_name}}</p>
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
         </div>
</div>
<div class="container mt-4 text-center">
  {{$posts->links()}}
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
          <h2 class="title">About Swappee</h2>
          <h1 class="sub-title">Trade what you want in swappee</h1>  
        </div>

        <div class="about-content">
          <p>We're dedicated to providing you the best of Trading items, with a focus on dependability and We're working to turn our passion for Trading items into a booming online website. I will keep posting more important posts on my Website for all of you. Please give your support and love</p>
          <ul class="list-unstyled"> 
            <li><i class="fas fa-check"></i> Hello Friends Welcome To Swappee!</li>
            <li><i class="fas fa-check"></i> Swappee is a Professional Trading items Platform.</li>
            <li><i class="fas fa-check"></i> Here we will provide you only interesting content, which you will like very much</li>
            <li><i class="fas fa-check"></i> Swappee will keep posting more important posts on my Website for all of you.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
</section>



<!--Product Section for swap Start!-->

@endsection