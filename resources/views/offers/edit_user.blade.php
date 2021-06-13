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
                    <!-- create form -->
                    <h2 class="header-title mb-3 mt-4">Edit Offer</h2> 
                    @include('offers.edit_form')  
                    <!-- end create form -->
         </div>
        </section>    
    </div>
</div>

 
@endsection