@extends('layouts.layout2')

@section('content')
  

<div class="container">
@include('User.profilebar')
  <div class="row">
     <div class="col-xl-3 d-none d-lg-block">
         
                <!-- side menu-->                   
                        @include('User.sidemenu')
                 <!-- end side menu-->
                  
     </div>  
 
        <!-- product section -->
        <section class="col-xl-9 mb-4">
         <!-- side modal for mobile view -->
       
         <!-- end side modal -->    
             
         <div class="card-box"class="border"style="box-shadow: 0 0px 10px 0 rgb(44 44 45 / 7%)">   
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
                        <!-- web view -->

                        <div class="d-none d-lg-block">
                            <a class="btn btn-primary float-right" href="{{route('posts.create')}}" style="background-color:#FFB52E; border:none;">Add Product</a>        
                        <form class="d-flex mb-2 mt-2"  action="{{route('search.profile_product')}}" method="GET">
                        <input class="form-control mr-sm-2 search_box_category" type="search" name="search" placeholder="Search your items" aria-label="Search">
                        </form>
                        </div>
                         
                         <!-- mobile view -->
                        <div class="d-sm-block d-md-none">
                            <div class="ml-2">
                                <a class="btn btn-primary float-right" href="{{route('posts.create')}}" style="background-color:#FFB52E; border:none;"><i class="fas fa-plus"></i></a>      
                            </div>  
                                <form class="d-flex mb-2 mt-2"  action="{{route('search.profile_product')}}" method="GET">
                                <input class="form-control mr-sm-2 mr-2 search_box_category" type="search" name="search" placeholder="Search your items" aria-label="Search">
                                </form>                   
                        </div>
                         <!-- end mobile view -->
                      
       <!-- product card -->
       @forelse($posts as $post)
            @empty
                <div class="alert alert-danger mt-4">
                    <p><i class="fas fa-exclamation-triangle" style="color:red;"></i> No Items Found </p>
                </div>
        @endforelse
                @foreach($posts as $post)
                    <div class="container mt-4 mb-2">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-12">
                                <div class="row p-2 bg-white border rounded">
                                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image-user" src="/storage/{{$post->image}}"></div>
                                    <div class="col-md-6 mt-1">
                                        <h5 style="over-flow:hidden;">{{$post->product_name}}</h5>     
                                        <p class="text-justify text-truncate para mb-0"> <h4 class="mr-1" style="color:#FFB52E;">PHP {{number_format($post->price)}}</h4></p>
                                        <div class="d-flex flex-row">                   
                                            <div class="ratings mr-2">
                                            @if($post->approved == true)
                                            <i class="far fa-thumbs-up" style="color:blue;"></i> <span class="bg-blue">Approved </span>
                                            @else
                                            <i class="fas fa-history" style="color:red;"></i> <span class="bg-pink">Pending</span>
                                            @endif
                                            <i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="justify-content-center">Actions</h4>
                                        </div>
                                    
                                        <div class="d-flex flex-column mt-2">
                                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-outline-warning btn-sm mb-2" type="button">Edit</a>
                                        <button  data-toggle="modal" data-target="#{{$post->id}}" class="btn btn-outline-warning btn-sm" >Details</button>
                                        {!! Form::open(['route' => ['posts.delete', $post->id], 'method' => 'delete']) !!}
                                        <button class="delete form-control btn-sm mt-2" style="height:30px;" >Delete</button>
                                        {!!Form::close() !!}
                                        </div>
                                    </div>
                                </div>                
                            </div>
                        </div>
                    </div>
                <div class="container text-center">
                        {{$posts->links()}}
                </div>
                 @endforeach
                <!-- end product card -->
            </div>
         </div>
        </div>
</div>


<!-- end col -->

   
 <!-- Modal -->
 @foreach($posts as $post)
 <div class="modal fade" id="{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                <div class="container">

<div class="row">
    <div class="col-sm-5 mt-4 mb-4">
        <div class="card">
            <div class=card-body>
                <div class="view-product">
               
                        <img src="/storage/{{$post->image}}" style="width:100%;height:100%;" id="show-img" > 
                    					
                </div>	
            </div> 	
        </div>
    </div>

    <div class="col-sm-7 mt-4 mb-4">
        <div class="card">
            <div class="card-body">
                
                          
                            	<!-- web view	 -->
								<div class="d-none d-lg-block">
									<h1>{{$post->product_name}}</h1>
								</div>
								 <!-- mobile view -->
								<div class="d-sm-block d-md-none">
								  <b>{{$post->product_name}}</b>
								</div>
								<!-- end mobile view -->
                            <hr>
                            <h3 style="color:#FFB52E;"> PHP {{number_format($post->price)}}</h3>
                            <p><i class="fas fa-user-alt" style="color:#999;"></i><b style="color:#999; font-weight:400;"> Posted by:</b> {{$post->user->name}}</p> 
                            
                            <hr>
                            
                                                    
                            <p><i class="fas fa-sync-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Wish to Swap:</b> {{$post->wishitem}}</p>								
                            <p><i class="far fa-calendar-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Posted date:</b> <i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</p>
                            <hr>
                            
                            <p><i class="fas fa-truck" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Delivery Method:</b> {{$post->delivery_method}}</p>
                            <p class="mb-4"><i class="fas fa-map-marker-alt" style="color:#999;"></i><b style="color:#999;font-weight:400;"> Locations:</b> {{$post->location}}</p>					  
            </div>
        </div>
    </div>
                        

</div>
</div>
<div class="container">
<div>
    <div class="card mb-4 products-section">
        <div class="card-header bg-white">
            <h3>Product Descriptions </h3>
        </div>
        <div class="card-body">
            
                <div class="container">
                {!! $post->description !!}	
                </div>
            
        </div>
    </div>
</div>	
</div>
                  </div>
              </div>
           </div>
        </div>        
                           

          @endforeach   
            <!-- end modal -->
                
               
@endsection
