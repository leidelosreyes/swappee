@extends('layouts.layout1')
@section('content')
 <!--ContactSection Start!-->
 <section class="contact-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div>
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
        <form action="" class="needs-validation" novalidate id="forms">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="myname" class="form-control" placeholder="Your Name" required>
                <!-- <div class="invalid-feedback">Please enter your name!</div>
                -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="myemail" class="form-control" placeholder="Your Email" required>
                <!-- <div class="invalid-feedback">Please enter your email!</div> -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
              <input type="text" id="mysubject" class="form-control" placeholder="Subject" required>
              <!-- <div class="invalid-feedback">Please enter your subject!</div> -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea class="form-control" id="mymessage" placeholder="Message" required style="height:200px;"></textarea>
                <!-- <div class="invalid-feedback">Please enter your message!</div> -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-info" type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5 order-first order-md-last">
        <!--Contact Item Start-->
        <div class="contact-item">
          <div class="icon">
          <i class="fa fa-envelope"></i>
          </div>
          <h5>Email</h5>
          <p>tradee@domain.com</p>
        </div>
        <!--Contact Item end-->
        <div class="contact-item">
          <div class="icon">
          <i class="fa-map-marker-alt"></i>
          </div>
          <h5>Location</h5>
          <p>Philippines, Congress Village Brgy.173 Caloocan City</p>
        </div>
        <!--Contact Item end-->
        <div class="contact-item">
          <div class="icon">
          <i class="fa fa-phone"></i>
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