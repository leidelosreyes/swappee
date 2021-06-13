@extends('layouts.admin_base')
@section('content')
<div class="container">
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
    <div class="card">
    <div class="card-header">
                                  <p>Winners</p>
                                </div>
        <div class="card-body">
            <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Product Name</th>
                <th scope="col">Date Ended</th>
                <th scope="col">Amount</th>
                <th scope="col">Notify</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($winners as $bidder)  
                <td> <div class="mt-2">
                        @if(empty($bidder->user->avatar))
                        <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                        @else
                        <img src="{{$bidder->user->avatar}}" class="card-avatar"/>
                        @endif
                     </div>
                </td>
                <td> <p class="mt-2">{{$bidder->user->name}}</p> </td>
                <td> <p class="mt-2">{{$bidder->auction->product_name}}</p> </td>
                <td> <p class="mt-2">{{$bidder->auction->end_date}}</p> </td>
                <td> <p class="mt-2">{{$bidder->amount}}</p> </td>
                <td> <div class="mt-2">
                          {!! Form::open(['route' => ['send_notify.admin', $bidder->id], 'method' => 'get']) !!}
                              <button class="btn btn-success btn-sm">Send</button>
                          {!!Form::close() !!}
                    </div>
                </td>
                
                </tr>
                @endforeach
                <tr>
            
            </tbody>
            </table>
            {{$winners->links()}}
        </div>
    </div>
</div>
@endsection