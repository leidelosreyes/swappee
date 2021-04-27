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
                    <!-- create form -->
                    <h4 class="header-title mb-3 mt-4">Add Auction</h4> 
                    @include('auctions.create_form')  
                    <!-- end create form -->
        </section>    
    </div>
</div>

 
@endsection