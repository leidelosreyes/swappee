<table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
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
      <td> <p class="mt-2">{{$bidder->created_at->format('Y/m/d H:i:s')}}</p> </td>
      <td> <p class="mt-2">{{$bidder->amount}}</p> </td>
    
    </tr>
    @endforeach
    <tr>
 
  </tbody>
</table>