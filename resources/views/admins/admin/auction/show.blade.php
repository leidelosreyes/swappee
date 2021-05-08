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
                                <h4 class="header-title mb-3 mt-4" >Auctions</h4> 
                                <table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Bid Price</th>
      <th scope="col" style="padding-left:30px">Auction Approval</th>
      <th scope="col" style="padding-left:30px">Auction Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
    @foreach($auction as $auction)
     
      <td> <p class="mt-2">{{$auction->product_name}}</p> </td>
      <td> <p class="mt-2">{{$auction->estimated_price}}</p> </td>
      <td> <p class="mt-2">{{$auction->bidding_start_price}}</p> </td>
      <td>  
      {!! Form::open(['route' => ['auction_approval.admin', $auction->id], 'method' => 'post']) !!}
         <button class="btn btn-success btn-sm"  style="border:1px;margin-left:24px">
          <i class="fas fa-check" style="color:white;margin-left:10px;padding-right:10px;">Approve</i>
         </button>     
      {!!Form::close() !!}
      </td>
      <td>
          @if($auction->approved == true)
          <i class="far fa-thumbs-up"  style="color:orange;padding-left:25px;"></i> <span class="bg-blue">Approved</span>
          @else
          <i class="fas fa-history" style="color:red;"></i> <span class="bg-pink">Pending</span>
          @endif
      </td>
      <td>
          <div class="d-flex mt-2">
            <a href="#"><i class="far fa-eye" style="color: #57585a; margin-right:10px;"></i>
            <a href="#" style="padding-right:10px"><i class="fas fa-edit"></i></a> 
            {!! Form::open(['route' => ['delete_auction.admin', $auction->id], 'method' => 'get']) !!}
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
    </div>
</div>

@endsection