@extends('layouts.layout2')

@section('content')
<div class="container mt-4">
   @include('user.profilebar')
        <!-- end row -->
        <div class="row">
            <div class="col-xl-4">

                <!-- side menu -->
                 @include('user.sidemenu')
                <!--  end side menu -->
                
                 <!-- side bar message -->
                 @include('messages.sidebar_message')
                  <!-- sidebar message end -->
            <div class="col-xl-8" >
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=" {{route('user.profile')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('show.notifications')}}">Notifications</a></li>            
                <li class="breadcrumb-item"><a href="{{route('show.offers')}}">Offers</a></li>
               
            </ol>
            </nav>
                <!-- end row -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                <div class="card-box"class="border"style="box-shadow: 0 0px 10px 0 rgb(44 44 45 / 7%)">
                <h4 class="header-title mb-3">Edit Product</h4> 
                        @include('posts.edit_user_post_form')
                               
                </div>              
             </div>
            <!-- end col -->  
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
 </div>
</div>
@endsection