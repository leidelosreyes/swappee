@extends('layouts.adminbase')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
        @if ($message = Session::get('success'))
                                <div class="alert alert-success mt-4">
                                     <p>{{$message}}</p>
                                </div>
                                @endif
                                @if ($message = Session::get('error'))
                                <div class="alert alert-danger mt-4">
                                     <p>{{$message}}</p>
                                </div>
                                @endif
                                <h4 class="header-title mb-3 mt-4">For Swap</h4> 
                                <table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Location</th>
      <th scope="col">Approved</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
    @foreach($swap as $swap)
     
      <td> <p class="mt-2">{{$swap->product_name}}</p> </td>
      <td> <p class="mt-2">{{$swap->price}}</p> </td>
      <td> <p class="mt-2">{{$swap->location}}</p> </td>
      <td>  {{$swap->approved}} </td>
      <td>
                                    <div class="d-flex mt-2">
                                    <a href="#"><i class="far fa-eye" style="color: #57585a; margin-right:5px;"></i>
                                    <a href="#" style="margin-right:5px;"><i class="fas fa-edit"></i></a>
                                   
                                            <button class="delete" style="border:none;background:none;outline:none !important;outline:0px;">
                                                <i class="fas fa-trash-alt" style="color:red;"></i>
                                            </button>
                                
                                    </div>
                                    </td>
    
    </tr>
    @endforeach
    <tr>
 
  </tbody>
</table>
        </div>
    </div>
</div>

@endsection