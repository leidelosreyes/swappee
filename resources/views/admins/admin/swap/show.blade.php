@extends('layouts.admin_base')
@section('content')

<div class="container">


    <div class="card">
    <div class="card-header">
                                  <p>Swap</p>
                                </div>
    <div class="col-xl-12 mt-4">
                  <form class="d-flex"  action="{{route('posts_admin.search')}}" method="GET">
                <input type="search" name="search" class="form-control searchTerm" placeholder="What are you looking for?">
                <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
                </form>
              </button>
        </div>

      

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
                               
                                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">User Address</th>
      <th scope="col" style="padding-left:30px">Item Approval</th>
      <th scope="col" style="padding-left:30px;">Item Status</th>
      <th scope="col" style="padding-left:25px;">Actions</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
    @foreach($swaps as $swap)
      <td> <p class="mt-2">{{$swap->user->name}}</p> </td>
      <td> <p class="mt-2">{{$swap->product_name}}</p> </td>
      <td> <p class="mt-2">{{$swap->price}}</p> </td>
      <td> <p class="mt-2">{{$swap->location}}</p> </td>
      <td>
        {!! Form::open(['route' => ['post_approval.admin', $swap->id], 'method' => 'post']) !!}
            <button class="btn btn-success btn-sm" style="border:1px;">
            <i class="fas fa-check" style="color:white;margin-left:10px;padding-right:10px;">Approve</i>
            </button>     
        {!!Form::close() !!}
      </td>
      <td style="padding-left:20px;">  
        
        @if($swap->approved == true)
        <span class="bg-blue">Approved</span>
        @else
        <i class="fas fa-history" style="color:red;"></i> <span class="bg-pink">Pending</span>
        @endif
      </td>
      <td>
                                    <div class="d-flex">
                                    <a href="#"><i class="far fa-eye" style="color: #57585a; margin-right:5px;padding-right:10px"></i>
                                    <a href="#" style="margin-right:5px;padding-right:10px"><i class="fas fa-edit"></i></a>
                                   
                                    {!! Form::open(['route' => ['delete_swap.admin', $swap->id], 'method' => 'post']) !!}
                                      <button class="delete" style="border:none;background:none;outline:none !important;outline:0px;">
                                      <i class="fas fa-trash-alt" style="color:red;"></i>
                                      </button>     
                                    {!!Form::close() !!}
                                
                                    </div>
                                    </td>
    
    </tr>
    @endforeach
    <tr>
 
  </tbody>
</table>


        </div>
        <div class="mt-4 mb-4 container">
           {{$swaps->links()}}
        </div>
    </div>
</div>


@endsection