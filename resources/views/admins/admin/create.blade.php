@extends('layouts.adminbase')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
            
            <h4 class="header-title mb-3 mt-4">Create Administrator</h4>            
               <form action="{{route('store.admin')}}" method ="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form__div">
                                        <input type="text" 
                                        id="name"
                                        name="name"
                                        style="height:60px;"
                                        class="form__input form-control @error('name') is-invalid @enderror"
                                        value="{{old('name')}}"
                                        autocomplete="name" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Name <label style="color:red;">*</label></label>
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
                                        value="{{old('email')}}"
                                        autocomplete="email" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Email <label style="color:red;">*</label></label>
                                        @error('email')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
                            </div>
                            <div class="form__div">
                                        <input type="text" 
                                        id="password"
                                        name="password"
                                        style="height:60px;"
                                        class="form__input form-control @error('password') is-invalid @enderror"
                                        value="{{old('password')}}"
                                        autocomplete="password" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Passwprd <label style="color:red;">*</label></label>
                                        @error('password')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
                            </div>
                            <div class="form__div">
                                      <select id="inputState" 
                                      id="usertype"
                                      name="usertype"
                                      class="form-control form__input @error('usertype') is-invalid @enderror"
                                      value="{{old('usertype')}}"
                                      autocomplete="usertype" autofocus 
                                      style="height: 60px;">
                                    
                                                <option>admin</option>
                                                <option>content-manager-admin</option>
                                                <option>post-moderator-admin</option>
                                                <option>user-manager-admin</option>
                                        
                                      </select>
                                      @error('usertype')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                      @enderror
                                       <label for="" class="form__label">Choose Sub Usertype <label style="color:red;">*</label></label>    
                                  </div>
                                  <div class="form__div">
                                        <input type="date" 
                                        id="email_verified_at"
                                        name="email_verified_at"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control @error('email_verified_at') is-invalid @enderror"
                                        value="{{old('email_verified_at')}}"
                                        autocomplete="email_verified_at" autofocus
                                        >
                                        <label for="" class="form__label">Verified Admin <label style="color:red;">*</label></label>
                                         @error('email_verified_at')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                    <button type="sumbit" class="btn btn-primary mt-4 mb-4"style="background-color:#FFB52E;border:none;"> <i class="fas fa-save"></i> Save</button>  
               </form>   
            </div>
        </div>
    </div>
@endsection