@extends('layouts.adminbase')
@section('content')

        
<div class="container">
    <div class="card">
      <div class="card-body">
      <h4 class="header-title mb-3 mt-4">Create Categories</h4>   
      <form action="/sub_categories" method="post" enctype="multipart/form-data">
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
                        <button type="sumbit" class="btn btn-primary mt-4 mb-4"style="background-color:#FFB52E;border:none;"> <i class="fas fa-save"></i> Save</button>  
         
         </form>
      
      </div>
    </div>
</div>
@endsection