@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin">
          <div class="card-body">
          <div class="logo-row" style="text-align: center;">
    <a href="{{url('/')}}"><img src="../image/swappee_logo.png" alt="ggggg" style="height: 50px;"></a>
      </div>
            <h5 class="card-title text-center"></h5>
            <form class="form-signin"  method="POST" action="{{ route('login') }}">
            @csrf 
              <div class="form-label-group">
              <input class="mb-4 form-control @error('email') is-invalid @enderror" id="inputEmail" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus type="email"  placeholder="Email"> 
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label for="inputEmail">Email address</label>
            
              </div>

              <div class="form-label-group">
              <input id="inputPassword" type="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password"  placeholder="password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                            <label for="inputPassword">Password</label>
              </div>

              <!-- <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div> -->

              <div class="custom-control custom-checkbox mb-3">
              @if (Route::has('password.request'))
                                    <a class="ml-auto mb-0 text-sm"  style="margin-left:110px;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
    
              </div>



              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              <a class="btn btn-lg btn-google btn-block text-uppercase" href="{{ route('login.google') }}" role="button" ><i class="fab fa-google mr-2"></i>Sign in with Google</a>
              <!-- <a class="btn btn-lg btn-facebook btn-block text-uppercase" href="{{ route('login.facebook') }}"role="button" ><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</a> -->
            </form>
           
              
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection



<!-- <div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style=" margin:50px; ">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                        <div class="container">
                            <div class="social-login">

                              <h2>Sign in with:</h2>
                                <div class="row justify-content-center">
                                   
                                         
                                    <a href="{{route('login.facebook')}}" class="fb btn">
                                    <i class="fab fa-facebook"></i> Login with Facebook</a>

                                    <a href="#" class="tw btn">
                                    <i class="fab fa-twitter"></i> Login with Twiiter</a>

                                    <a href="{{ route('login.google') }}" class="go btn">
                                    <i class="fab fa-google-plus-g"></i> Login with Google</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div> -->