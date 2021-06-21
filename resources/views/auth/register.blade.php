@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin ">
          <div class="card-body">
          <div class="logo-row" style="text-align: center;">
          <a href="{{url('/')}}"><img src="../image/swappee_logo.png" alt="ggggg" style="height: 50px;"></a>
      </div>
            <h5 class="card-title text-center"></h5>
            <form class="form-signin" method="POST" action="{{ route('register') }}">
            @csrf
             
            <div class="form-label-group">
            <input class="mb-3 form-control @error('name') is-invalid @enderror" id="username" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus type="name"  placeholder="Enter Name"> 
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label for="username">Username <label for="username" style="color:red;"> * </label></label>
               
              </div>

              <div class="form-label-group">
              <input class="mb-3 form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email"  placeholder="Enter Email Address"> 
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                <label for="email">Email <label for="username" style="color:red;"> * </label></label>
              </div>
              <div class="form-label-group">
              <input class="mb-3 form-control @error('cellphone_no') is-invalid @enderror" id="cellphone_no" name="cellphone_no" value="{{ old('cellphone_no') }}"  autocomplete="cellphone_no" autofocus type="number"  placeholder="Enter Cellphone Number"> 
                        @error('cellphone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                <label for="cellphone_no">Cellphone No <label for="cellphone_no" style="color:red;"> * </label></label>
              </div>
           
              <div class="form-label-group">
              <input class="mb-3 form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}"  autocomplete="address" autofocus type="text"  placeholder="Enter Address"> 
                        @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                <label for="address">Address <label for="address" style="color:red;"> * </label></label>
              </div>
              <div class="form-label-group">
              <input id="password"  placeholder="Enter Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label for="password"> Password <label for="username" style="color:red;"> * </label></label>
              </div>

              <div class="form-label-group">
              <input id="password-confirm" placeholder="Confirm your Password"type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                <label for="password-confirm"> Confirm Password <label for="username" style="color:red;"> * </label></label>
              </div>

             <div class="text-center">
             <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
              <hr>
              <a class="btn btn-lg btn-google btn-block text-uppercase"href="{{route('login.google')}}" ><i class="fab fa-google"></i> Sign in with Google</a>
              <!-- <a class="btn btn-lg btn-facebook btn-block text-uppercase" href="{{route('login.facebook')}}"><i class="fab fa-facebook-f"></i> Sign in with Facebook</a> -->
             </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>



    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            
                <div class="card-body">
                    <div class="row" style="justify-content: flex-end;">  
                        <div class="col-2" style="padding-left: 0;padding-right: 0;">
                            <a href="{{ route('policy') }}" style="text-decoration:none;font-weight: bold;color: #757575;">Privacy</a>
                        </div>
                        <div class="col-2" style="padding-left: 0;padding-right: 0;">
                            <a href="{{ route('terms_condition') }}" style="text-decoration:none;font-weight: bold;color: #757575;">Terms</a>
                        </div>
                    </div>
                
            </div>
        </div>    
      </div>
    </div>
  </div>






  </div>


  <!-- <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            
                <div class="card-body">
                    <div class="row" style="justify-content: flex-end;">  
                        <div class="col-2" style="padding-left: 0;padding-right: 0;">
                            <a href="" style="text-decoration:none;font-weight: bold;color: #757575;">Privacy</a>
                        </div>
                        <div class="col-2" style="padding-left: 0;padding-right: 0;">
                            <a href="" style="text-decoration:none;font-weight: bold;color: #757575;">Terms</a>
                        </div>
                    </div>
                
            </div>
        </div>    
      </div>
    </div>
  </div> -->



@endsection
