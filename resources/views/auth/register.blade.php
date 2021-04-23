@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin ">
          <div class="card-body">
          <div class="logo-row" style="text-align: center;">
                  <p>Resigtration Form</p>
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
              <input class="mb-3 form-control @error('cellphone_no') is-invalid @enderror" id="cellphone_no" name="cellphone_no" value="{{ old('cellphone_no') }}" required autocomplete="cellphone_no" autofocus type="number"  placeholder="Enter Cellphone Number"> 
                        @error('cellphone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                <label for="cellphone_no">Cellphone No <label for="cellphone_no" style="color:red;"> * </label></label>
              </div>
              <!-- <div class="form-label-group">
              <input class="mb-3 form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus type="date"  placeholder="Enter Birthdate"> 
                        @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                <label for="birthday">Birthday <label for="birthday" style="color:red;"> * </label></label>
              </div> -->
              <div class="form-label-group">
              <input class="mb-3 form-control @error('address') is-invalid @enderror" id="location" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus type="text"  placeholder="Enter Address"> 
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

              <div class="custom-control custom-checkbox mb-3">
                <!-- <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label> -->
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
              <hr class="my-4">
              <a class="btn btn-lg btn-google btn-block text-uppercase"href="{{route('login.google')}}" ><i class="fab fa-google mr-2"></i> Sign in with Google</a>
              <a class="btn btn-lg btn-facebook btn-block text-uppercase" href="{{route('login.facebook')}}"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
