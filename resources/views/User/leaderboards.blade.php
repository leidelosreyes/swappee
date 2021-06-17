@extends('layouts.layout2')
 @section('content')
 <div class="container mt-4">
    @include('User.profilebar') 
    <div class="row">
        <div class="col-xl-3 d-none d-lg-block">
                    <!-- side menu-->                   
                            @include('User.sidemenu')
                    <!-- end side menu-->              
        </div>  

        <section class="col-xl-9 mb-4">
        <div class="card-box"class="border" style="box-shadow: 0 0px 10px 0 rgb(44 44 45 / 7%)">
          <!-- side modal for mobile view -->
          
         <!-- end side modal --> 
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success mt-4">
                                        <p>{{$message}}</p>
                                    </div>
                                    @endif                 
                    <!-- create form -->
                    <h2 class="header-title mb-3 mt-4">Leader Boards</h2> 
                    <table class="table">
      <thead>
        <tr>
        <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Points</th>
        </tr>
      </thead>
      <tbody>
      @foreach($leaderboards as $point)
        <tr>
        <th scope="row">  @if(empty($point->user->avatar))
                    <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                      @else
                    <img src="{{$point->user->avatar}}" class="card-avatar"/>
                    @endif</th>
          <td>{{$point->user->name}}</td>
          <td>{{$point->amount}}</td>
          
        </tr>
      @endforeach
      </tbody>
    </table>  
                    </div>
                    <!-- end create form -->
        </section>    
    </div>
</div>

 
@endsection
