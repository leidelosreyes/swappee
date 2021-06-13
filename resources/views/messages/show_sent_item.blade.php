@extends('layouts.layout2')

@section('content')

    <div class="container mt-4">
        @include('User.profilebar')
        <!-- end row -->
        <div class="row">
            <div class="col-xl-3">

                <!-- side menu -->
                 @include('User.sidemenu')
                <!--  end side menu -->
            </div>  
            <div class="col-xl-9" >      
                <div class="card-box"class="border"style="box-shadow: 0 0px 10px 0 rgb(44 44 45 / 7%)"> 
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{$message}}</p>
                        </div>
                        @endif

                    <h2>Message</h2>
                           <!-- START OF MEESAGE    -->
                           
                           <div class="email-app mb-4">
                                    <main class="messages">
                                    <div class="details">
                                       
                                        <div class="header">
                                        <img src = "{{$reply->m_receiver->avatar}}" style="height:1.8rem; width:1.8rem;" alt="" class="thumb-lg rounded-circle">
                                        <div class="from">
                                            <span>{{$reply->m_receiver->name}}</span>
                                                  {{$reply->m_receiver->email}}
                                        </div>
                                        <div class="date"><b>{{$reply->created_at}}</b></div>
                                        </div>
                                        <div class="content mb-4">
                                        <p> Sender Name: {{$reply->m_sender->name}}
                                        </p>
                                        <br>
                                        <p>
                                        {!! $reply->message!!}
                                        </p>
                                        </div>
                                      
                                    </div>
                                    </main>
                                </div>
                           <!-- end -->
                </div>
             </div>
        </div>
 </div>
                
               
@endsection