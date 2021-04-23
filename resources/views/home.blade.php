@extends('layouts.layout2')

@section('content')

<div class="container">
@include('layouts.carousel')
</div>

<div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h2 class="title text-center">Available for Swap</h2>
            </div>
        </div>
 @include('slider.slider')  
 <!-- mobile view side bar -->
<div class="d-sm-block d-md-none mb-4">
    <div class="card">
        <div class="card-body text-left">       
            <a href=""data-toggle="modal" data-target="#exampleModal"><p> <i class="fas fa-bars"></i> All Categories</p> </a>             
        </div>
    </div>
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



<!-- side bar will show only in web view -->

<div class="row">
    <div class="col-xl-3 d-none d-lg-block">
         @include('side_menu')              
    </div>   
</div>
<!-- end side bar -->
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
                    <!-- web view -->
                    <div class="d-none d-lg-block">
                    <img src="{{asset('/image/x-error-removebg-preview.png')}}" class="error-icon"> 
                    </div>

                    <!-- mobile view -->
                    <div class="d-sm-block d-md-none mb-4">
                    <img src="{{asset('/image/x-error-removebg-preview.png')}} " class="error-icon-mobile"> 
                   </div>
                   
        
           @endforelse  
     
                 	
<div class="container ">
  <div class="row">

        @foreach ($posts as $post) 
        <div class="col-6 col-md-4 col-lg-3 b-col mt-4">

                  <div class="d-flex product-details ">
                  @if(empty($post->user->avatar))
                  <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                  @else
                    <img src="{{$post->user->avatar}}" class="card-avatar"/>
                  @endif
                      <p style="font-size:.75rem;" class="mt-2 ml-2">{{$post->user->name}}</p>
                  </div> 
                    <div class="product-image-wrapper">

                      <div class="single-products">
                          <div class="productinfo">
                                    

                         <img src="/storage/{{$post->image}}"  style=" height: 10rem; width: 100%;

                              object-fit: cover;" alt="no image" />
                              
                            <div class="product-details">
                              <div  style="height:20px; overflow:hidden;">
                                  <p style="font-size: 16px;font-weight: 500;">{{$post->product_name}}</p>
                              </div>  
                                <p style="font-size:.70rem;"><i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</p>
                                <div class="product-bottom-details">
                                  <div class="product-price" style="font-size:.75rem;padding-top:4px;">₱ {{number_format($post->price)}}</div>
                                  <div class="product-links">
                                   
                                    <a href="/posts/{{$post->id}}"> <p style="font-size:.75rem;">Swap</p></a>
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
<div class="container mt-4 text-center">
  {{$posts->links()}}
</div>
</section>

</div>
</div>
@endsection



