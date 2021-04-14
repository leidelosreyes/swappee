@extends('layouts.layout2')

@section('content')
@include('layouts.header-nav')
@include('layouts.carousel')
<!-- Modal -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " style="max-width: 50%;" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="container">
                          <!-- form -->
                          <form action="/posts" method ="post" enctype="multipart/form-data">
                              @csrf
                          
                                  <div class="form__div">
                                        <input type="text" 
                                        id="product_name"
                                        name="product_name"
                                        style="height:60px;"
                                        class="form__input form-control @error('product_name') is-invalid @enderror"
                                        value="{{old('product_name')}}"
                                        autocomplete="product_name" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Product Name <label style="color:red;">*</label></label>
                                        @error('product_name')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form__div">
                                        <input type="number" 
                                        id="price"
                                        name="price"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('price') is-invalid @enderror"
                                        value="{{old('price')}}"
                                        autocomplete="price" autofocus
                                        >
                                        <label for="" class="form__label">Price <label style="color:red;">*</label></label>
                                         @error('price')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                    <div class="form__div">
                                        <input type="text"
                                        id="wishitem"
                                        placeholder=" "
                                        name="wishitem"
                                        style="height:60px;"
                                        class="form-control form__input @error('wishitem') is-invalid @enderror"
                                        value="{{old('wishitem')}}"
                                        autocomplete="wishitem" autofocus
                                        >
                                        <label for="" class="form__label">Wish to Swap <label style="color:red;">*</label></label>
                                        @error('wishitem')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                       
                                    </div>
                                    <div class="form__div">
                                      <select id="inputState" 
                                      id="category_id"
                                      name="category_id"
                                      class="form-control form__input @error('category_id') is-invalid @enderror"
                                      value="{{old('category_id')}}"
                                      autocomplete="category_id" autofocus
                                      style="height: 60px;">
                                      @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                      </select>
                                      @error('category_id')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
                                       <label for="" class="form__label">Choose Categories <label style="color:red;">*</label></label>    
                                  </div>

                                  <div class="form__div">
                                      <select id="inputState" 
                                      id="sub_category_id"
                                      name="sub_category_id"
                                      class="form-control form__input @error('sub_category_id') is-invalid @enderror"
                                      value="{{old('sub_category_id')}}"
                                      autocomplete="sub_category_id" autofocus 
                                      style="height: 60px;">
                                      @foreach ($sub_categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                      </select>
                                      @error('sub_category_id')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                      @enderror
                                       <label for="" class="form__label">Choose Sub Categories <label style="color:red;">*</label></label>    
                                  </div>
                                    <div class="form__div">
                                      <select id="inputState" 
                                      id="delivery_method"
                                      name="delivery_method"
                                      style="height:60px;"
                                      class="form-control form__input @error('delivery method') is-invalid @enderror"
                                      value="{{old('delivery_method')}}"
                                      autocomplete="delivery_method" autofocus
                                            >
                                            <option>Meet Up</option>
                                            <option>Delivery</option>
                                            
                                            </select>
                                      @error('delivery_method')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                      @enderror
                                       <label for="" class="form__label">Delivery Method <label style="color:red;">*</label></label>    
                                  </div>
                                  <div class="form__div">
                                        <input type="text" 
                                         id="location"
                                         name="location"
                                         placeholder=" "
                                         style="height:60px;"
                                         class="form-control form__input @error('location') is-invalid @enderror"
                                         value="{{old('location')}}"
                                         autocomplete="location" autofocus
                                        >
                                        <label for="" class="form__label">Location <label style="color:red;">*</label></label>
                                        @error('location')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;" >{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                    <textarea 
                                            id="description"
                                            name="description"
                                            class="form-control @error('description') is-invalid @enderror"
                                            value="{{old('description')}}"
                                            autocomplete="description" autofocus
                                            >
                                            </textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror

                                 
                                        <label class="mt-4" for="image" style="margin-bottom:0;">Post Image <label style="color:red;">*</label></label>
                                        <input type="file" name="image" id="image" class="form-control-file">
                                  
                                              @error('image')
                                                  
                                                          <p style="color:red;">{{$message}}</p>
                                                    
                                              @enderror  
                                              
                                   <div class="modal-footer mt-4">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>          
                                      <button type="sumbit" class="btn btn-primary"style="background-color:#FFB52E;border:none;"> <i class="far fa-paper-plane"></i> Save</button>
                                  </div>          
                          </form>
                          <!-- end form -->
                    </div>     
                  </div>
          
              </div>
           </div>
        </div>        
                           

             
            <!-- end modal -->

<div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h2 class="title text-center">Available for Swap</h2>
            </div>
        </div>
 @include('slider.slider')  

<div class="row">
       @include('side_menu')    
</div>

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
            <h3 style="text-align:center;"><i class="fas fa-exclamation-triangle" style="color:red;"></i> Nothing's Found</h3>
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
                              object-fit: cover;" alt="" />
                              
                            <div class="product-details">
                              <div  style="height:20px; overflow:hidden;">
                                  <p style="font-size: 16px;font-weight: 500;">{{$post->product_name}}</p>
                              </div>  
                                <p style="font-size:.70rem;"><i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</p>
                                <div class="product-bottom-details">
                                  <div class="product-price" style="font-size:.75rem;padding-top:4px;">₱ {{number_format($post->price)}}</div>
                                  <div class="product-links">
                                   
                                    <a href="/posts/{{$post->id}}"> <p style="font-size:.75rem;">Swap Now</p></a>
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



