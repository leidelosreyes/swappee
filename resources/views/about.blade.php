@extends('layouts.layout1')
@section('content')

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






@endsection


