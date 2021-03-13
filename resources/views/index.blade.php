@extends('layouts.base')
@section('content')

<!--Home section Start!-->
<section class="home-section">
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima distinctio velit sequi, quo rerum iure consequuntur amet hic minus, aspernatur cumque porro nulla sed? Hic dignissimos quisquam sequi molestias dolore?</p>
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

</section>



<!--About section Start!-->
<section class="about-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex">
        <div class="about-img">
          <img class="img-fluid" src="/image/deals.png" alt="">
        </div>
      </div>
      <div class="col-lg-6 order-first order-lg-last">
        <div class="section-title">
          <!--About title Start!-->
          <h1 class="title">About Swappee</h1>
          <h2 class="sub-title">Trade what you want in swappee</h2>  
        </div>

        <div class="about-content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ut minima molestias cumque, ratione quod facere maxime vero ipsum nulla cum in deleniti quidem! Optio obcaecati impedit fuga culpa atque?</p>
          <ul class="list-unstyled"> 
            <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Features section Start!-->
<section class="features-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <!--Features title Start!-->
        <div class="section-title">
          <h1 class="title">Our Services</h1>
          <h2 class="sub-title">Lorem ipsum dolor sit amet </h2>
        </div>
      </div>
    </div>
    <div class="row">

        <!--Features  Item!-->
        <div class="col-md-6 col-lg-4 d-flex">
          <div class="col-lg-12 features-item">
            <div class="icon"><i class="fas fa-retweet"></i></div>
            <h3>Innovation</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          </div>
        </div>
        <!--end!-->
        <div class="col-md-6 col-lg-4 d-flex">
          <div class="col-lg-12 features-item">
            <div class="icon"><i class="fas fa-retweet"></i></div>
            <h3>Innovation</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          </div>
        </div>
        <!--end!-->
        <div class="col-md-6 col-lg-4 d-flex">
          <div class="col-lg-12 features-item">
            <div class="icon"><i class="fas fa-retweet"></i></div>
            <h3>Innovation</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          </div>
        </div>
        <!--end!-->
    </div>
  </div>
</section>



<!--Product Section for swap Start!-->
<section class="products-section">
  <div class="container">
    <!--SwapItem Start!-->
    <div class="row justify-content-center">
      <div class="col-lg-7"> 
        <!--section title Start!-->
          <div class="section-title">
            <h1 class="title">Swap Items</h1>
            <h2 class="subtitle">Trade what you want in swappee</h2>
          </div>
      </div>
    </div>

    <div class="row">
   <div class="owl-carousel" id="product-carousel">
      <!--ProductItem Start!-->
        <div class="col-lg-12">
          <div class="products-item">
            <div class="product-img">
              <img class="img-fluid" src="/image/pic1.jpg" alt="product">
            </div>
            <div class="product-content">
              <div class="product-price">
                <span class="new-price">200</span>
                <span class="old-price">100</span>
              </div>
                <h5 class=product-name>Made In Tawi-Tawi</h5>
                <div class="card d-flex justify-content-center">  
               <a href="#" class="btn bg-primary">Swap Now</a>
               <a href="#" class="btn bg-primary">Swap Now</a>
              </div>
            </div>
          </div>
        </div>
      <!--ProductItem End!-->
        <!--ProductItem Start!-->
        <div class="col-lg-12">
          <div class="products-item">
            <div class="product-img">
              <img class="img-fluid" src="/image/pic2.jpg" alt="product">
            </div>
            <div class="product-content">
              <div class="product-price">
                <span class="new-price">200</span>
                <span class="old-price">100</span>
              </div>
              <h5 class=product-name>Made In Tawi-Tawi</h5>
              <div class="card d-flex justify-content-center">  
               <a href="#" class="btn bg-primary">Swap Now</a>
               <a href="#" class="btn bg-primary">Swap Now</a>
              </div>
            </div>
          </div>
        </div>
      <!--ProductItem End!-->
       <!--ProductItem Start!-->
       <div class="col-lg-12">
          <div class="products-item">
            <div class="product-img">
              <img class="img-fluid" src="/image/pic3.jpg" alt="product">
            </div>
            <div class="product-content">
              <div class="product-price">
                <span class="new-price">200</span>
                <span class="old-price">100</span>
              </div>
              <h5 class=product-name>Made In Tawi-Tawi</h5>
              <div class="card d-flex justify-content-center">  
               <a href="#" class="btn bg-primary">Swap Now</a>
               <a href="#" class="btn bg-primary">Swap Now</a>
              </div>
            </div>
          </div>
        </div>
      <!--ProductItem End!-->
        <!--ProductItem Start!-->
        <div class="col-lg-12">
          <div class="products-item">
            <div class="product-img">
              <img class="img-fluid" src="/image/pic1.jpg" alt="product">
            </div>
            <div class="product-content">
              <div class="product-price">
                <span class="new-price">200</span>
                <span class="old-price">100</span>
              </div>
              <h5 class=product-name>Made In Tawi-Tawi</h5>
              <div class="card d-flex justify-content-center">  
               <a href="#" class="btn bg-primary">Swap Now</a>
               <a href="#" class="btn bg-primary">Swap Now</a>
              </div>
            </div>
          </div>
        </div>
      <!--ProductItem End!-->
      </div>
    </div>

  </div>
</section>




<!--Product Section for auction Start!-->

<section class="product-section">
<div class="container">
    <!--SwapItem Start!-->
    <div class="row justify-content-center">
      <div class="col-lg-7"> 
        <!--section title Start!-->
          <div class="section-title">
            <h1 class="title">Auction Items</h1>
            <h2 class="subtitle">Trade what you want in swappee</h2>
          </div>
      </div>
    </div>

    <div class="row">
    <div class="owl-carousel" id="products-carousel">
      <!--ProductItem Start!-->
        <div class="col-lg-12">
          <div class="products-items">
            <div class="product-imgs">
              <img class="img-fluid" src="/image/pic1.jpg" alt="product">
            </div>
            <div class="product-contents">
              <div class="product-prices">
                <span class="new-prices">200</span>
                <span class="old-prices">100</span>
              </div>
              <h5 class="product-names">Made In Tawi-Tawi</h5>
              <div class="card d-flex justify-content-center">  
               <a href="#" class="btn bg-primary">Swap Now</a>
               <a href="#" class="btn bg-primary">Swap Now</a>
              </div>
            </div>
          </div>
        </div>
      <!--ProductItem Start!-->
      <div class="col-lg-12">
          <div class="products-items">
            <div class="product-imgs">
              <img class="img-fluid" src="/image/pic2.jpg" alt="product">
            </div>
            <div class="product-contents">
              <div class="product-prices">
                <span class="new-prices">200</span>
                <span class="old-prices">100</span>
              </div>
              <h5 class=product-names>Made In Tawi-Tawi</h5>
              <div class="card d-flex justify-content-center">  
               <a href="#" class="btn bg-primary">Button</a>
               <a href="#" class="btn bg-primary">Swap Now</a>
              </div>
            </div>
          </div>
        </div>
      <!--ProductItem Start!-->
      <div class="col-lg-12">
          <div class="products-items">
            <div class="product-imgs">
              <img class="img-fluid" src="/image/pic3.jpg" alt="product">
            </div>
            <div class="product-contents">
              <div class="product-prices">
                <span class="new-prices">200</span>
                <span class="old-prices">100</span>
              </div>
              <h5 class="product-names">Made In Tawi-Tawi</h5>
              <div class="card d-flex justify-content-center">  
               <a href="#" class="btn bg-primary">Swap Now</a>
               <a href="#" class="btn bg-primary">Swap Now</a>
              </div>
            </div>
          </div>
        </div>
      <!--ProductItem Start!-->
    <div class="col-lg-12">
          <div class="products-items">
            <div class="product-imgs">
              <img class="img-fluid" src="/image/pic1.jpg" alt="product">
            </div>
            <div class="product-contents">
              <div class="product-prices">
                <span class="new-prices">200</span>
                <span class="old-prices">100</span>
              </div>
              <h5 class="product-names">Made In Tawi-Tawi</h5>
              <div class="card d-flex justify-content-center">  
               <a href="#" class="btn bg-primary">Swap Now</a>
               <a href="#" class="btn bg-primary">Swap Now</a>
              </div>
            </div>
          </div>
        </div>
      <!--ProductItem End!-->
      </div>
      </div>
 

    </div>
</section>


  <!--ContactSection Start!-->
<section class="contact-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <!--start-->
        <div class="section-title"> 
          <h1 class="title">Contact Us</h1>
          <h2 class="subtitle">Lorem Ipsum dolor sit amet</h2>
        </div>
        <!--end-->
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <form action="" class="contact-form" novalidate id="forms">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="myname" class="form-control" placeholder="Your Name">
               
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="myemail" class="form-control" placeholder="Your Email">
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
              <input type="text" id="mysubject" class="form-control" placeholder="Subject">
            
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea class="form-control" id="mymessage" placeholder="Message"></textarea>
                <div class="invalid-feedback">Please Enter Message</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-info">Send Message</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5 order-first order-md-last">
        <!--Contact Item Start-->
        <div class="contact-item">
          <div class="icon">
          <i class="far fa-envelope"></i>
          </div>
          <h5>Email</h5>
          <p>tradee@domain.com</p>
        </div>
        <!--Contact Item end-->
        <div class="contact-item">
          <div class="icon">
          <i class="fas fa-map-marker-alt"></i>
          </div>
          <h5>Location</h5>
          <p>Philippines, Congress Village Brgy.173 Caloocan City</p>
        </div>
        <!--Contact Item end-->
        <div class="contact-item">
          <div class="icon">
          <i class="fas fa-phone"></i>
          </div>
          <h5>Call us on</h5>
          <p>+63 1234 4223</p>
        </div>
        <!--Contact Item end-->
      </div>
    </div>
  </div>
</section>
@endsection