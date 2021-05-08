@extends('layouts.admin_base')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
            <thead>
                <tr>
                
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Item Name</th>
                <th scope="col">Bid Created</th>
                <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                @foreach($bidders as $bidder)
                
                <td> @if(empty($bidder->user->avatar))
                <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                        @else
                    <img src="{{$bidder->user->avatar}}" class="card-avatar"/>
                    @endif
                
                </td>
                <td> <p class="mt-2">{{$bidder->user->name}}</p> </td>
                <td> <p class="mt-2">{{$bidder->auction->product_name}}</p> </td>
                <td> <p class="mt-2">{{$bidder->created_at->format('Y/m/d H:i:s')}}</p> </td>
                <td> <p class="mt-2">{{$bidder->amount}}</p> </td>
                
                </tr>
                @endforeach
                <tr>
            
            </tbody>
            </table>

            {{$bidders->links()}}
        </div>
    </div>
</div>
@endsection