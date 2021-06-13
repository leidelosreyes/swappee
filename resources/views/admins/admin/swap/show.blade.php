@extends('layouts.admin_base')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
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
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th scope="col">Username</th>
                                      <th scope="col">Item Name</th>
                                      <th scope="col">Item Price</th>
                                      <th scope="col">User Address</th>
                                      <th scope="col" style="padding-left:30px">Item Approval</th>
                                      <th scope="col" style="padding-left:30px;">Item Status</th>
                                      <th scope="col" style="padding-left:25px;">Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  
                                    <tr>
                  @foreach($swap as $swap)
                                      <td> <p class="mt-2">{{$swap->user->name}}</p> </td>
                                      <td> <p class="mt-2">{{$swap->product_name}}</p> </td>
                                      <td> <p class="mt-2">{{$swap->price}}</p> </td>
                                      <td> <p class="mt-2">{{$swap->location}}</p> </td>
                                      <td>
                                        {!! Form::open(['route' => ['post_approval.admin', $swap->id], 'method' => 'post']) !!}
                                        @if($swap->approved == false)
                                            @php
                                              $status = "info"
                                            @endphp
                                            <button class="btn btn-{{$status}} btn-sm" style="border:1px;margin-left:20px">
                                              <p>Approval</p>
                                            </button>
                                        @elseif($swap->approved == true)
                                          @php
                                          $status = "secondary"
                                          @endphp
                                        <button class="btn btn-{{$status}} btn-sm" style="border:1px;margin-left:15px" disabled>
                                              <p>Approved</p>
                                        </button>
                                        @endif   
                                        {!!Form::close() !!}
                                      </td>
                                      <td style="padding-left:20px;">  
                                        
                                        @if($swap->approved == true)
                           @php
                            $approval = "success"
                          @endphp
                            <span class="badge badge-pill badge-{{$approval}}"><i class="fa fa-check" aria-hidden="true">Approved</i></span>
                          @else
                          @php
                            $approval = "secondary"
                          @endphp
                          <span class="badge badge-pill badge-{{$approval}}"><i class="fas fa-history">Pending</i></span>
                      @endif
                      </td>
                        <td>
                          <div class="d-flex">
                          
                          <a href="show_post_details/{{$swap->id}}" ><i class="far fa-eye" style="color: #57585a; margin-right:5px;padding-right:10px"></i>
                          <a href="#" style="margin-right:5px;padding-right:10px" data-toggle="modal" data-target="#edit{{$swap->id}}"><i class="fas fa-edit"></i></a>
                          {!! Form::open(['route' => ['delete_swap.admin', $swap->id], 'method' => 'post']) !!}
                            <button class="delete" style="border:none;background:none;outline:none !important;outline:0px;">
                              <i class="fas fa-trash-alt" style="color:red;"></i>
                            </button>     
                          {!!Form::close() !!}  
                        </div>
                      </td>
                  </tr>
                  @endforeach
                <tr>              
            </tbody>
        </table>
    </div>
  </div>
</div>


@foreach($swap_details as $posts)
<div class="modal fade " id="edit{{$posts->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-m">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Credentials</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <!--Update Form-->
        <form method="post" action="{{route('edit_post.admin',$posts->id)}}" >
        @csrf
        @method('POST')   
       
                        
                          <div class="form__div">
                                        <input type="text" 
                                        id="product_name"
                                        name="product_name"
                                        style="height:60px;"
                                        class="form__input form-control @error('product_name') is-invalid @enderror"
                                        value="{{$posts->product_name}}"
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
                                        value="{{$posts->price}}"
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
                                        value="{{$posts->wishitem}}"
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
                                                <option value="{{ $category->id }}" {{ $category->id === $posts->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
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
                                      @foreach ($sub_categorie as $sub_category)
                                      <option value="{{ $sub_category->id }}" {{ $sub_category->id === $posts->sub_category_id ? 'selected' : '' }}>{{ $sub_category->name }}</option>
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
                                          
                                      <option {{ $posts->delivery_method ? 'selected' : '' }}>{{ $posts->delivery_method }}</option>
                                      @if($posts->delivery_method == "Meet Up") 
                                      <option >Delivery</option>
                                      @else 
                                      <option >Meet up</option>
                                      @endif
                                                  
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
                                         value="{{$posts->location}}"
                                         autocomplete="location" autofocus
                                        >
                                        <label for="" class="form__label">Location <label style="color:red;">*</label></label>
                                        @error('location')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;" >{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                    <label  for="image" style="margin-bottom:0;">Product Description <label style="color:red;">*</label></label>
                                    <textarea 
                                            id="description"
                                            name="description"
                                            class="form-control @error('description') is-invalid @enderror"
                                            value="{{old('description')}}"
                                            autocomplete="description" autofocus
                                            >
                                            {!!$posts->description!!}
                                            </textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror      
    
                         <button type="sumbit" class="btn btn-primary mt-4 mb-4 form-control"style="background-color:#FFB52E;border:none;"> <i class="fas fa-save"></i> Save</button> 
</form>
<!--End Form--->
      </div>
    </div>
  </div>
</div>
 @endforeach


@endsection
