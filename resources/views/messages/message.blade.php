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
                    <div class="card-box ribbon-box">
                    <div class="ribbon ribbon-primary">Messages</div>
                    <div class="clearfix"></div>
                  
                </div>
            </div>
                
                <!-- side bar message -->
                
                <!-- sidebar message end -->
            <div class="col-xl-8" >

            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('user.profile')}}">Products</a></li>
                <li class="breadcrumb-item"><a href="{{route('show.notifications')}}">Notifications</a></li>            
                <li class="breadcrumb-item"><a href="{{route('show.offers')}}">Offers</a></li>
                <li class="breadcrumb-item active" aria-current="page">Message</li>
               
            </ol>
            </nav>

                <!-- end row -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                   
                <div class="card-box"class="border"style="box-shadow: 0 0px 10px 0 rgb(44 44 45 / 7%)">
                            <h4 class="header-title mb-3">Message</h4>

                          
                              <div class="d-flex">
                                 <b>From: </b> <p>{{$messages->m_sender->name}}</p>
                              </div>
                              <div class="d-flex">
                                 <b>date: </b> <p> {{$messages->created_at->format('Y/m/d H:i:s')}}</p>
                             </div>  
                             <div class="d-flex">
                                 <b>To: </b> <p> {{$messages->m_receiver->name}}</p>
                             </div>
                             <div class="container mt-4 mb-4">
                                <div class="col-sm-12">
                                    {!!$messages->message!!}
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