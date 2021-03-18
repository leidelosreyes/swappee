@extends('layouts.layout1')
@section('content')


<!--Home section Start!-->
<!-- <section class="home-section">
  <div class="bg-shapes">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="home-content">
            <h1>Welcome to Swappee</h1>
            <p>Trading is one of the oldest social activities of human beings. 
              Our vision is a world in which trading, through the internet helps promote peace and social change. 
              Our mission at Swappee is to play a key role in that vision by providing a fantastic, easy to use, 
              social platform for bartering and auction. 
              Our name refers to that feeling of satisfaction when in the course of a trade, all parties are happy.</p>
            <a href="" class="btn btn-info">Swap Now!</a>
          </div>
        </div>
        <div class="col-lg-6 order-first order-lg-last">
            <div class="home-img">
                <img src="/image/deals.png" alt="images">
            </div>
        </div>
      </div>
  </div>

</section> -->



<!--About section Start!-->
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
<section class="container">
    <h4> Our Services </h4>
  </div>
  <div class="card-body">
  <section class="features-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
    
      <div>
        <!--Features title Start!-->
      </div>
    </div>
    <div class="row">

        <!--Features  Item!-->
        <div class="col-md-6 col-lg-4 d-flex">
          <div class="col-lg-12 features-item" style="margin-bottom: 20px;">
            <div class="icon"><i class="fa fa-truck"></i></div>
            <h3>Delivery</h3>
            <p>We deliver your package with love.</p>
          </div>
        </div>
        <!--end!-->
        <div class="col-md-6 col-lg-4 d-flex">
          <div class="col-lg-12 features-item" style="margin-bottom: 20px;">
            <div class="icon"><i class="fa fa-sync"></i></div>
            <h3>Swap</h3>
            <p>Swapping will make you feel better.</p>
          </div>
        </div>
        <!--end!-->
        <div class="col-md-6 col-lg-4 d-flex">
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
<section  style="margin-top:50px;">


<section class="products-section " style="margin-top:50px;">

<div class="container ">
<h2 class="title text-center">Available for Swap</h2>
<div class="row">
        @foreach ($posts as $post) 
        <div class="col-sm-3">

       
        
                    <div class="product-image-wrapper">
                      <div class="single-products">
                          <div class="productinfo text-center">
                                                  
                          <a href="{{route('login')}}">  <img src="/storage/{{$post->image}}" style="width:100%; height:15rem;
                              object-fit: cover;" alt="" /></a>
                            
                              <img src="{{$post->user->avatar}}" class="card-avatar"/>
                             
                               
                            <div class="product-details">
                           

                                <p>{{$post->product_name}}</p>
                                <p>{{$post->created_at}}</p>
                                <div class="product-bottom-details">
                                  <div class="product-price" style="font-size:1rem;">₱{{$post->price}}</div>
                                  <div class="product-links">
                                   
                                   <i class="fa fa-sync"></i>
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
</div>

  </section>





  

@endsection