@extends('layouts.layout1')
@section('content')
 <!--ContactSection Start!-->
 <!-- View for web -->
 
 <section class="contact-section bg-light" style="padding: 20px 0 80px;">
  <div class="container">
    <div class="row justify-content-center">
      <div>
        <!--start-->
        <div class="section-title mb-0"> 
          <h1 class="title">Contact Us</h1>
         
        </div>
        <!--end-->
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
      <div class="card">
      <div class="card-body">
      
        <form action="" class="needs-validation" novalidate id="forms">
          <div class="row mr-0">
            <div class="col-md-6 pr-0">
              
              <div class="form__div">
                                        <input type="text" 
                                        id="name"
                                        name="name"
                                        style="height:50px;"
                                        class="form__input form-control @error('product_name') is-invalid @enderror"
                                        value="{{old('name')}}"
                                        autocomplete="name" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Name <label style="color:red;">*</label></label>
                                        @error('product_name')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
                                    </div>
              </div>
            
            <div class="col-md-6 pr-0">
              <div class="form-group">
              <div class="form__div">
                                       <input type="text" 
                                        id="email"
                                        name="email"
                                        style="height:50px;"
                                        class="form__input form-control @error('product_name') is-invalid @enderror"
                                        value="{{old('email')}}"
                                        autocomplete="email" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Email <label style="color:red;">*</label></label>
                                        @error('product_name')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
              </div>
            </div>
            </div>
          </div>
          
          <div class="form-group">  
                 <div class="form__div">
                                        <input type="text" 
                                        id="subject"
                                        name="subject"
                                        style="height:50px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('subject') is-invalid @enderror"
                                        value="{{old('subject')}}"
                                        autocomplete="subject" autofocus
                                        >
                                        <label for="" class="form__label">Subject <label style="color:red;">*</label></label>
                                         @error('estimated_price')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                    </div>
                    </div>
                    
             
              <div class="form-group">
                                            <textarea 
                                            id="message"
                                            name="message"
                                            class="form-control @error('message') is-invalid @enderror"
                                            value="{{old('message')}}"
                                            placeholder="My Message"
                                            autocomplete="message" autofocus
                                            >
                                            </textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
              
            
          </div>
          <div class="row">
            <div class="col-md-12">
            <button type="sumbit" class="btn btn-primary"style="background-color:#FFB52E;border:none;"> <i class="far fa-paper-plane"></i> Send</button>
            </div>
          </div>
        </form>
        </div>
      </div>
      </div>

      
      <div class="col-md-5 d-none d-lg-block order-first order-md-last">
      <div class="card">
      <div class="card-body pt-4">
        <!--Contact Item Start-->
        <div class="contact-item mb-2">
          <div class="icon">
          <i class="fa fa-envelope"></i>
          </div>
          <h5>Email</h5>
          <p>swappee.online</p>
        </div>
        <!--Contact Item end-->
        <div class="contact-item mb-2">
          <div class="icon">
          <i class="fas fa-map-marked-alt"></i>
          </div>
          <h5 >Location</h5>
          <p>Philippines, Congress Brgy.173 Caloocan City</p>
        </div>
        <!--Contact Item end-->
        <div class="contact-item mb-2">
          <div class="icon">
          <i class="fa fa-phone"></i>
          </div>
          <h5>Call us on</h5>
          <p>+63 1234 4223</p>
        </div>

        <div class="mb-2">
        <div class="card-body" style="height:18.5rem;">
        <!-- <img class="img-fluid" src="image/map.jpg" alt="" style="width: 100%;height: 100%;object-fit: cover;"> -->
  </div>
        
        </div>
        <!--Contact Item end-->
      </div>
    </div>
    </div>
    </div>
  </div>



</section>












@endsection