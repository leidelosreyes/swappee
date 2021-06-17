@extends('layouts.layout2')

@section('content')
<div class="container">
     <div class="mt-4">
     <!-- profile bar  -->
     <div class="d-none d-lg-block">

<div class="card mb-3 products-section">
  <div class="card-body" style="background-color: #02c0ce !important;">
            <div class="row">
                <div class="col-sm-4">
                    <span class="float-left mr-3">
                            
                            @if(empty($users->avatar))
                            <img src="{{asset('image/user_icon.png')}}" alt="" class="thumb-lg rounded-circle">
                            @else
                            <img src="{{$users->avatar}}" alt="" class="thumb-lg rounded-circle">
                            @endif
                    </span>
                                      
                    <div class="media-body text-white">
                            <p style="color:whitesmoke;"><h4 class="mb-1 font-18" style="color:whitesmoke;margin-top:2rem;">{{$users->name}}</h4></p>
                            <p class="mb-0" style="color:whitesmoke;"><i class="far fa-clock" style="color:green;"></i> Joined : {{$users->created_at->diffForHumans()}}</p>
                            <!-- <p class="mb-0" style="color:whitesmoke;"><span>Active 0 minutes ago</span></p> -->
                           
                                          <!-- <p class="text-light mb-0"><i class="far fa-envelope" style="color:white"></i> joelpogitalaga@gmail.com</p> -->                          
                    </div>
                 </div>
                 <div class="col-sm-8" style="border-left: 1.5px solid rgb(211,211,211);text-align: center;">
                 <div class="row">
                    <div class="col-md " >
                        <div class="media-body text-white " style="padding-top:2rem;">
                            <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-envelope" style="color:whitesmoke;"></i><span style="color:whitesmoke; margin-left: 3px;"></span><span style="font-weight: 700;">{{$users->email}}</span></p>
                            <!-- <p class="mb-0" style="color:whitesmoke;"><i class="far fa-chart-bar" ></i><span style="color:whitesmoke; margin-left: 3px;"> Reports:</span><span style="font-weight: 700;"> 16.k</span></p>                                        -->
                        </div>
                    </div>
                    <div class="col-sm ">
                        <div class="media-body text-white " style="padding-top:2rem;" >
                           
                            <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-coins" ></i><span style="color:whitesmoke; margin-left: 3px;"> Points:</span><span style="font-weight: 700;">{{$points->amount}}</span></p>
                        </div>
                    </div>
                    <div class="col-sm ">
                        <div class="media-body text-white " style="padding-top:2rem;" >
                            <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-sync"></i><span style="color:whitesmoke; margin-left: 3px;"> Reports:</span><span style="font-weight: 700;"> 10</span></p>
                            <!-- <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-gavel"></i><span style="color:whitesmoke; margin-left: 3px;"> Auction:</span><span style="font-weight: 700;"> 16.k</span></p>                                                     -->
                        </div>
                    </div>
                </div>
                 </div>
            </div>
  </div>
</div>
</div>



<!-- mobileview start-->
<div class="d-sm-block d-md-none mb-4">
<div class="container">
<div class="card mb-4 products-section">
  <div class="card-body" style="background-color: #02c0ce !important;">
            <div class="row">
                <div class="col-sm-6">
                    <span class="float-left mr-3">
                              
                    @if(empty($users->avatar))
                            <img src="{{asset('image/user_icon.png')}}" alt="" class="thumb-lg rounded-circle">
                            @else
                            <img src="{{$users->avatar}}" alt="" class="thumb-lg rounded-circle">
                            @endif
                    </span>
                                      
                    <div class="media-body text-white">
                    <p style="color:whitesmoke;"><h4 class="mb-1 font-18" style="color:whitesmoke;margin-top:2rem;">{{$users->name}}</h4></p>
                            <p class="mb-0" style="color:whitesmoke;"><i class="far fa-clock" style="color:green;"></i> Joined : {{$users->created_at->diffForHumans()}}</p>
                    </div>
                 </div>
                 <div class="col-sm-6" style="text-align: center;">
                 <div class="row">
                    <div class="col-4">
                        <div class="media-body text-white" style="padding-top:1rem;">
                        <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-coins" ></i><span style="color:whitesmoke; margin-left: 3px;"> Points:</span><span style="font-weight: 700;">{{$points->amount}}</span></p>
                        
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="media-body text-white" style="padding-top:1rem;">
                        <p class="mb-0" style="color:whitesmoke;"><i class="fas fa-sync"></i><span style="color:whitesmoke; margin-left: 3px;"> Reports:</span><span style="font-weight: 700;"> 10</span></p>
                        </div>
                    </div>
                </div>
                 </div>
            </div>
  </div>
</div>
</div>
</div>
<!-- end -->
     <!-- end profile bar -->
     </div>
     <!-- slider -->
     <div class="mt-4">
    

<div class="col-sm-12 d-none d-lg-block">
    <div class="slickSlider">
            @foreach($categories as $category)
                <div class="col-sm-1"><a href="{{route('public_profile_posts.filter',[$category->id,$users->id])}}" value="{{$category->id}}" style="border:none;background:none;outline:none !important;outline:0px;">
                    <img src="/storage/{{$category->icon}}" class="categories-radius" style="width:90px;"/></a>
                    <p class="font-12">{{$category->name}} </p>
                </div>
            @endforeach
    </div>   
</div>

<div class="col-sm-12 d-sm-block d-md-none">
    <div class="slickSlider">
            @foreach($categories as $category)
                <div class="col-sm-1"><a href="{{route('public_profile_posts.filter',[$users->id,$category->id])}}" value="{{$category->id}}" style="border:none;background:none;outline:none !important;outline:0px;">
                    <img src="/storage/{{$category->icon}}" class="categories-radius" style="width:65px;"/></a>
                   
                </div>
            @endforeach
    </div>   
</div>

     </div>
        
     <!-- end slider -->
<!-- mobile view side bar -->
<div class="d-sm-block d-md-none mt-2">
    
        <div class="card-body text-left">       
            <a href=""data-toggle="modal" data-target="#exampleModal"><p><i class="fas fa-border-all"></i> All Categories</p> </a>             
        </div>
        <hr>

     
    <!-- modal -->
            <div class="modal left fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">All Categories</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-left">
                        @foreach($categories as $category)
                          <a href="{{route('filter.category',$category->id)}}"><p class="font-15" value="{{$category->id}}">{{$category->name}}</p></a>
                          @endforeach
                          <hr>
                          @foreach($sub_categories as $sub_category)
                            <form action="{{route('filter.sub_category',$sub_category->id)}}" method="GET">
                                <div class="container">
                                  <input type="checkbox" class="form-check-input" name="sub_category" value="{{$sub_category->id}}"
                                  onChange="this.form.submit()">
                                  <p class="font-15">{{$sub_category->name}} </p>
                                </div>
                            </form>  
                          @endforeach
                        </div>
                        <div class="modal-footer">
                           
                        </div>
                    </div>
                </div>
            </div>
<!-- end modal -->
</div>  
<!-- end mobile view -->
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
                <form class="d-flex mb-2 mt-2" action="{{route('search.public_view',$users->id)}}" method="GET">
						<input class="form-control mr-sm-2 search_box_category" type="search" name="search" placeholder="Search your items" aria-label="Search">
   					</form>
                       
                    <div class="panel-body">
                        
                        <hr>
                        
                        <div class="text-left">
                          <a href=""><p class="">All Products</p></a>
                          @foreach($categories as $category)
                          <a href="{{route('public_profile_posts.filter',[$category->id,$users->id])}}"><p class="font-15" value="{{$category->id}}">{{$category->name}}</p></a>
                          @endforeach
                          <hr>
                          @foreach($sub_categories as $sub_category)
                            <form action="{{route('public_profile_sub.filter',[$sub_category->id,$users->id])}}" method="GET">
                                <div class="container">
                                  <input type="checkbox" class="form-check-input" name="sub_category" value="{{$sub_category->id}}"
                                   onChange="this.form.submit()">
                                  <p class="font-15">{{$sub_category->name}} </p>
                                </div>
                            </form>  
                          @endforeach
                         
                        </div>
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
    </div>
        </div>
     <!-- end slider -->
     <div class="row">
     <div class="col-xl-3 d-none d-lg-block">
                <!-- Personal-Information -->
                <div class="card-box">
                <form class="d-flex mb-2 mt-2"  action="{{route('search.public_view',$users->id)}}" method="GET">
						<input class="form-control mr-sm-2 search_box_category" type="search" name="search" placeholder="Search your items" aria-label="Search">
   					</form>
                       
                    <div class="panel-body">
                        
                        <hr>
                        
                        <div class="text-left">
                          <!-- <a href="{{route('user.profile_public_view')}}"><p class="">All Products</p></a> -->
                          @foreach($categories as $category)
                          <a href="{{route('public_profile_posts.filter',[$category->id,$users->id])}}"><p class="font-15" value="{{$category->id}}">{{$category->name}}</p></a>
                          @endforeach
                          <hr>
                          @foreach($sub_categories as $sub_category)
                            <form action="{{route('public_profile_sub.filter',[$sub_category->id,$users->id])}}" method="GET">
                                <div class="container">
                                  <input type="checkbox" class="form-check-input" name="sub_category" value="{{$sub_category->id}}"
                                   onChange="this.form.submit()">
                                  <p class="font-15">{{$sub_category->name}}</p>
                                </div>
                            </form>  
                          @endforeach
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
        <section class="col-xl-9 mb-4">  
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
                                   
                                    <a href="{{route('posts.show',$post->id)}}"> <p style="font-size:.75rem;">Swap</p></a>
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
</div>
<div class="container">{{$posts->links()}}</div>
</section>


<!-- START OF REVIEWS -->
<div class="container">

    <div class="card mb-3" style="box-shadow: 0 3px 10px 0 rgb(44 44 45 / 7%), inset 0 0 0 1px rgb(44 44 45 / 7%);">
			<div class="card-body">
                <div class="row">
                    
                    <div class="col-sm-6 col-md-8">
                        <div class="from" style="font-size: 12px;color: #9faecb;align-self: center;">
                            <img src = "{{ asset('image/pogi.jpg') }}" style="height:1.8rem; width:1.8rem;width: 40px;height: 40px;margin-right: 1rem;border-radius: 100%;" alt="" class="thumb-lg rounded-circle">
                                <span>@jeffersonlambutin.com
                                    Today, 3:47 PM
                                </span>   
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> 
                        </div>
                    </div>
                    <div class="card mt-0">
                         <div class="card-body">
                           <p class="mb-2" style="font-size: .8rem;">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                           </p>

                           <div class="row justify-content-between">
                             <div class="col-4">
                                <div class="col-4">
                                    <img src= "{{ asset('image/brand2.jpg') }}" alt="" style="width:10rem; height:10rem;">
                                </div>
                             </div>
                          </div>
                          
                           <hr>
                         </div>
                    </div>

                    <div class="col-sm-6 col-md-8">
                        <div class="from" style="font-size: 12px;color: #9faecb;align-self: center;">
                            <img src = "{{ asset('image/joel.jpg') }}" style="height:1.8rem; width:1.8rem;width: 40px;height: 40px;margin-right: 1rem;border-radius: 100%;" alt="" class="thumb-lg rounded-circle">
                                <span>@jeffersonlambutin.com
                                    Today, 3:47 PM
                                </span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>       
                        </div>
                    </div>
                    <div class="card my-0">
                         <div class="card-body">
                           <p style="font-size: .8rem;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                               in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                           </p>

                           <div class="row justify-content-between">
                             <div class="col-4">
                                <div class="col-4">
                                    <img src= "{{ asset('image/brand6.jpg') }}" alt="" style="width:10rem; height:10rem;">
                                </div>
                             </div>
                          </div>


                           <hr>
                         </div>
                    </div>
                                    
                </div>
			</div>
		</div>
</div>


<!-- END -->

</div>
</div>



@endsection