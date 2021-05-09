@extends('layouts.admin_base')
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
      <th scope="col">User</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Location</th>
      
      
    </tr>
  </thead>
  <tbody>
  
    <tr>
    @foreach($posts as $swap)
      <td> <p class="mt-2">{{$swap->user->name}}</p> </td>
      <td> <p class="mt-2">{{$swap->product_name}}</p> </td>
      <td> <p class="mt-2">{{$swap->price}}</p> </td>
      <td> <p class="mt-2">{{$swap->location}}</p> </td>
      <td> <p class="mt-2">{{$swap->deleted_at}} </p> </td>
    </tr>
    @endforeach
    <tr>
 
  </tbody>
</table>
        </div>
    </div>
</div>

{{$posts->links()}}
@endsection