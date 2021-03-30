@extends('layouts.layout2')

@section('content')
<div class="container">
     <div class="mt-4">
        @include('user.profilebar')   
     </div>
     <!-- slider -->
        <!-- @include('slider.slider') -->
     <!-- end slider -->

    <!-- modal for mobile view -->
    <div class="container demo">
    
    <div class="modal left fade" id="exampleModal" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    @if(empty(Auth::user()->avatar))
                    <img src="{{asset('image/user_icon.png')}}" alt="Avatar" class="card-avatar-view mt-2 justify-content-center">
                    @else
                    <img src="{{Auth::user()->avatar}}" alt="Avatar" class="card-avatar-view mt-2 justify-content-center">
                    @endif

                 <div class="d-flex  justify-content-center">
              
                        

                            <a href="#"><i class="fas fa-home mr-4 ml-4"></i></a>
                            <a href="#" ><i class="far fa-bell  mr-4"></i></a>
                            <a href="#" ><i class="fas fa-globe-asia  mr-4"></i> </a>
                        
                    </div>
                <div class="card-box">
                <form class="d-flex mb-2 mt-2" action="{{route('search.public_view')}}" method="GET">
						<input class="form-control mr-sm-2 search_box_category" type="search" name="search" placeholder="Search your items" aria-label="Search">
   					</form>
                       
                    <div class="panel-body">
                        
                        <hr>
                        
                        <div class="text-left">
                          <a href=""><p class="">All Products</p></a>
                          @foreach($categories as $category)
                          <a href=""><p class="font-15" value="{{$category->id}}">{{$category->name}}</p></a>
                          @endforeach
                          <hr>
                          <div class="container">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">Second Hand </p>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">new </p>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">old </p>
                          </div>
                        </div>
                        <ul class="social-links list-inline mt-4 mb-0">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- end modal -->

     <!-- modal show for mobile view -->
        <div class=" d-sm-block d-md-none">
        
        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
         View Categories
        </button>
    </div>
        </div>
     <!-- end slider -->
     <div class="row">
     <div class="col-xl-3 d-none d-lg-block">
                <!-- Personal-Information -->
                <div class="card-box">
                <form class="d-flex mb-2 mt-2"  action="{{route('search.public_view')}}" method="GET">
						<input class="form-control mr-sm-2 search_box_category" type="search" name="search" placeholder="Search your items" aria-label="Search">
   					</form>
                       
                    <div class="panel-body">
                        
                        <hr>
                        
                        <div class="text-left">
                          <a href="{{route('user.profile_public_view')}}"><p class="">All Products</p></a>
                          <a href=""><p class="">Electronic Devices</p></a>
                          <a href=""><p class="font-15">Appliances </p></a>
                          <a href=""><p class="font-15">Home & living </p></a>
                          <a href=""><p class="font-15">Fashion </p></a>
                          <a href=""><p class="font-15">Beauty Products </p></a>
                          <a href=""><p class="font-15">Sports & lifestyle </p></a>
                          <a href=""><p class="font-15">Toys </p></a>
                          <a href=""><p class="font-15">Antiques </p></a>
                          <a href=""><p class="font-15">Others </p></a>
                          <hr>
                          <div class="container">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">Second Hand </p>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">new </p>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">old </p>
                          </div>
                        </div>
                        <ul class="social-links list-inline mt-4 mb-0">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>  
     </div>  

        <!-- product section -->
        <section class="products-section col-xl-9 mb-4">
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
        @forelse($posts as $post)
				   @empty
           <img src="{{asset('/image/x-error-removebg-preview.png')}}" style=" height: 150px; width:150px; margin-top:100px;" class="center-img" id="show-img" > 
            <h3 style="text-align:center;"><i class="fas fa-exclamation-triangle" style="color:red;"></i> No Matched Found</h3>
           @endforelse  
         
                 	
<div class="container ">
    
  <div class="row mt-4">
        @foreach ($posts as $post) 
        <div class="col-6 col-md-4 col-lg-3 b-col ">

                  <!-- <div class="d-flex product-details ">
                  @if(empty($post->user->avatar))
                  <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                  @else
                    <img src="{{$post->user->avatar}}" class="card-avatar"/>
                  @endif
                      <p style="font-size:.75rem;" class="mt-2 ml-2">{{$post->user->name}}</p>
                  </div>  -->
                    <div class="product-image-wrapper">

                      <div class="single-products">
                          <div class="productinfo">
                                    
                         <img src="/storage/{{$post->image}}"  style=" height: 10rem; width: 100%;
                              object-fit: cover;" alt="" />
                              
                            <div class="product-details">
                              <div  style="height:20px; overflow:hidden;">
                                  <p style="font-size: 16px;font-weight: 500;">{{$post->product_name}}</p>
                              </div>  
                                <p style="font-size:.70rem;"><i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</p>
                                <div class="product-bottom-details">
                                  <div class="product-price" style="font-size:.75rem;padding-top:4px;">₱ {{$post->price}}</div>
                                  <div class="product-links">
                                   
                                    <a href="{{route('auth-posts.show',$post->id)}}"> <p style="font-size:.75rem;">View</p></a>
                                  </div>
                                </div>
                              </div>                    
                          </div>
                      </div>
                    
                    </div>
                    
                  </div>
                  @endforeach
         </div>
</div>
<div class="container">{{$posts->links()}}</div>
</section>

</div>
</div>              
@endsection