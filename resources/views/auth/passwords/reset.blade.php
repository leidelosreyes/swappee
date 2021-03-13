@extends('layouts.app')

@section('content')





 <!--topnavbar!-->
 
<div class="container">
    <div class="row">
    
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin">
          <div class="card-body">
          <div class="logo-row" style="text-align: center;">
    <a href="../index.php"><img src="{{asset('image/swappee_logo.png')}}" alt="ggggg" style="height: 50px;"></a>
      </div>
            <h5 class="card-title text-center"></h5>
            <form class="form-signin" method="POST" action="{{ route('password.update') }}">
            @csrf        

                <input type="hidden" name="token" value="{{ $token }}">

              <div class="form-label-group">
              <input id="inputEmail" type="email" placeholder="Enter E-Mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"  autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
              <input id="inputPassword" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                <label for="inputPassword">New Password</label>
              </div>

              <div class="form-label-group">
              <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                <label for="password-confirm">Confirm Password</label>
              </div>

            



              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Reset Password</button>
           
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>





@endsection
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

