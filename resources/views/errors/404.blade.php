@extends('layouts.layout1')

@section('content')

<div class="container mb-5 d-flex justify-content-around">
        <div class="row">
        <div class="col-12 text-center mt-5">
          <img class="d-block img-fluid m-auto" src="{{asset('image/404.png')}}" alt="" style="max-width: 100%; height: auto;">
        </div>
        <div class="col-12 text-center">
          <p style="font-size:2.25rem;">Oops! Page not found</p>
        </div>
        <div class="col-12 text-center mb-5">
          We Cannot find this page.  
        </div>
      
  </div>   
</div>





@endsection