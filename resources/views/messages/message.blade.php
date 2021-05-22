@extends('layouts.layout2')

@section('content')

    <div class="container mt-4">
        @include('User.profilebar')
        <!-- end row -->
        <div class="row">
            <div class="col-xl-4">

                <!-- side menu -->
                 @include('User.sidemenu')
                <!--  end side menu -->
            </div>  
            <div class="col-xl-8" >
             
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                    @endif


                   
                <div class="card-box"class="border"style="box-shadow: 0 0px 10px 0 rgb(44 44 45 / 7%)">   
                        content
                </div>



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
                     <strong>Commits pushed</strong> Lorem ipsum dolor sit amet
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