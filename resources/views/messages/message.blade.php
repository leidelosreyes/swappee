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
            </div>  
            <div class="col-xl-8" >
             
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                    @endif

                <!-- START OF MEESAGE    -->
                <div class="card-box"> 
                  <div class="row">
                    <div class="col col-lg-1">
                    <img src = "{{ asset('image/pogi.jpg') }}" style="height:1.8rem; width:1.8rem;" alt="" class="thumb-lg rounded-circle">
                    </div>
                    <div class="col col-lg-2 pr-0">
                    <span style="color: #aaa;">Joel Di Magiba</span>
                    </div>
                    <div class="col pr-0">
                    <p class="email-summary">
                     <strong>Commits pushed</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit... 
                     <span class="label label-success" style="background-color: #5cb85c;border-radius: 10%"><span style="color:white;">New</span></span></p>
                    <!-- <a href="#" class="b-color"><i class="fas fa-trash"></i></a> -->
                    </div>
                    <div class="col col-lg-1">
                    <a href="#" class="b-color"><i class="fas fa-trash"></i></a>
                    </div>
                 </div>
                
                </div>
                <!-- END   -->
             </div>
        </div>
 </div>
                
               
@endsection