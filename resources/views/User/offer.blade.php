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
        <!-- offer card -->
                    <h2>My offers</h2> 
                    <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box_category" type="search" name="search" placeholder="Search your offers" aria-label="Search">
   					</form>
                       
            @forelse($offer as $offers)
                        @empty
                            <div class="alert alert-danger mt-4">
                                <p><i class="fas fa-exclamation-triangle" style="color:red;"></i> No Items Found </p>
                             </div>
                @endforelse
                @foreach($offer as $offers)
                    <div class="container mt-4 mb-2">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-12">
                                <div class="row p-2 bg-white border rounded">
                                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image-user" src="/storage/{{$offers->image}}"></div>
                                    <div class="col-md-6 mt-1">
                                       
                                            <h5 style="over-flow:hidden;">{{$offers->product_name}}</h5>     
                                            <p class="text-justify text-truncate para mb-0"> <h4 class="mr-1" style="color:#FFB52E;">PHP {{number_format($offers->price)}}</h4></p>
                                        
                                        <div class="d-flex flex-row">
                                
                                            <div class="ratings mr-2">
                                            @if($offers->is_accepted == true)
                                            <i class="far fa-thumbs-up" style="color:blue;"></i> <span class="bg-blue">Accepted </span>
                                            @else
                                            <i class="fas fa-history" style="color:red;"></i> <span class="bg-pink">Pending</span>
                                            @endif
                                            <i class="far fa-clock" style="color:green"></i> {{$offers->created_at->diffForHumans()}}
                                        
                                         
                                            </div>
                                        </div>
                                          
                                        @if(empty($offers->receiver->avatar))
                                            To: <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/> </i><span class="bg-pink"></i><span class="bg-pink"><b>{{$offers->receiver->name}}</b></span>
                                            @else
                                            To: <img src="{{$offers->receiver->avatar}}" class="card-avatar"/> </i><span class="bg-pink"></i><span class="bg-pink"><b>{{$offers->receiver->name}}</b></span>
                                            @endif
                                         
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="justify-content-center">Actions</h4>
                                        </div>
                                    
                                        
                                        <div class="d-flex flex-column mt-4">
                                        <a href="{{route('offer.edit',$offers->id)}}" class="btn btn-outline-warning btn-sm mb-1" type="button">Edit</a>
                                        {!! Form::open(['route' => ['offer.delete', $offers->id], 'method' => 'post']) !!}
                                        @csrf
                                        <button class="delete form-control btn-sm mt-2" style="height:30px;" >Delete</button>
                                        {!!Form::close() !!}
                                        </div>
                                    </div>
                                </div>                
                            </div>
                        </div>
                    </div>
                <div class="container text-center">
                       
                </div>
                 @endforeach
                 </div>
                    <!-- end offer card -->
        </section>    
    </div>
    {{$offer->links()}}
</div>
        
   
                
@endsection