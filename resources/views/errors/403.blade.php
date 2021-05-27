@extends('layouts.layout1')

@section('content')

<div class="container mb-5 d-flex justify-content-around">
        <div class="row">
        <div class="col-12 text-center mt-5">
          <img class="d-block img-fluid m-auto" src="{{asset('image/403.png')}}" alt="" style="max-width: 100%; height: auto;">
        </div>
        <div class="col-12 text-center">
          <p style="font-size:2.25rem;">Forbidden</p>
        </div>
        <div class="col-12 text-center mb-5">
          You don't have permission to access on this server.  
        </div>
      
  </div>   
</div>





@endsection