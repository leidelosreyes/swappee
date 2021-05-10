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
        <section class="products-section col-xl-9 mb-4">
          <!-- side modal for mobile view -->
          
         <!-- end side modal --> 
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success mt-4">
                                        <p>{{$message}}</p>
                                    </div>
                                    @endif                 
                    <!-- edit form -->
                    <h4 class="header-title mb-3 mt-4">Edit Profile</h4>   
                    <form action="{{route('user.update_profile')}}" method ="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form__div">
                                        <input type="text" 
                                        id="name"
                                        name="name"
                                        style="height:60px;"
                                        class="form__input form-control @error('name') is-invalid @enderror"
                                        value="{{$user->name}}"
                                        autocomplete="name" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Enter Name <label style="color:red;">*</label></label>
                                        @error('name')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                            </div>
                            <div class="form__div">
                                        <input type="email" 
                                        id="email"
                                        name="email"
                                        style="height:60px;"
                                        class="form__input form-control @error('email') is-invalid @enderror"
                                        value="{{$user->email}}"
                                        autocomplete="email" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Enter Email <label style="color:red;">*</label></label>
                                        @error('email')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                            </div>
                            <div class="form__div">
                                        <input type="number" 
                                        id="cellphone_no"
                                        name="cellphone_no"
                                        style="height:60px;"
                                        class="form__input form-control @error('cellphone_no') is-invalid @enderror"
                                        value="{{$user->profile->cellphone_no}}"
                                        autocomplete="cellphone_no" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Enter cellphone_no <label style="color:red;">*</label></label>
                                        @error('cellphone_no')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                            </div>
                            <div class="form__div">
                                        <input type="text" 
                                        id="location"
                                        name="address"
                                        style="height:60px;"
                                        class="form__input form-control @error('address') is-invalid @enderror"
                                        value="{{$user->profile->address}}"
                                        autocomplete="address" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Enter address <label style="color:red;">*</label></label>
                                        @error('address')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                            </div>
                            <div class="form__div">
                                        <input type="password" 
                                        id="password"
                                        name="password"
                                        style="height:60px;"
                                        class="form__input form-control @error('password') is-invalid @enderror"
                                        value="{{$user->profile->password}}"
                                        autocomplete="password" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Enter password <label style="color:red;">*</label></label>
                                        @error('password')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                            </div>
                                        <label class="mt-4" for="image" style="margin-bottom:0;">Upload Image <label style="color:red;">*</label></label>
                                        <input type="file" name="image" id="image" class="form-control-file">
                                  
                                              @error('image')
                                                  
                                                          <p style="color:red;">{{$message}}</p>
                                                    
                                              @enderror  
                                              <button type="sumbit" class="btn btn-primary mt-4 mb-4"style="background-color:#FFB52E;border:none;"> <i class="fas fa-save"></i> Save</button>  
               </form>   
            
          
   







                    <!-- end edit form -->
        </section>    
    </div>
</div>

 
@endsection
