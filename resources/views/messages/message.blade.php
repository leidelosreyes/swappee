@extends('layouts.layout2')

@section('content')

    <div class="container mt-4">
        @include('User.profilebar')
        <!-- end row -->
        <div class="row">
                <div class="col-xl-3 d-none d-lg-block">
                
                <!-- side menu-->                   
                        @include('User.sidemenu')
                <!-- end side menu-->
                
        </div>  
            <div class="col-xl-9" >      
                <div class="card-box"class="border"style="box-shadow: 0 0px 10px 0 rgb(44 44 45 / 7%)"> 
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                    @endif

                <h2>Messages</h2>
                <hr>  
                           <!-- START OF MEESAGE    -->
                @forelse($messages as $message)
                @empty
                    <div class="alert alert-danger mt-4">
                        <p></i> No Message Found </p>
                    </div>
                @endforelse
                @foreach($messages as $message)
                <div class="card-box mb-0 p-2"> 
                
                    <div class="row">
                        <div class="col col-lg-1">
                        <img src = "{{$message->m_sender->avatar}}" style="height:1.8rem; width:1.8rem;" alt="" class="thumb-lg rounded-circle">
                        </div>
                        <div class="col col-lg-2 pr-0">
                        <span style="color: #aaa;">{{$message->m_sender->name}}</span>
                        </div>
                        <div class="col pr-0" style="height:30px; overflow:hidden;">
                        <p class="email-summary">
                        <a href="{{route('show-sender.message',$message->id)}}">
                        {!! $message->message !!}
                        </a>
                        </div>
                    
                    <div class="col col-lg-1">
                 
                          {!! Form::open(['route' => ['delete.message', $message->id], 'method' => 'delete']) !!}
                                      <button class="delete" style="border:none;background:none;outline:none !important;outline:0px;">
                                      <i class="fas fa-trash-alt" style="color:gray;"></i>
                                      </button>     
                          {!!Form::close() !!}
                    </div>
                 </div>
                
                </div>
 
               
                               <!-- END   -->
                    <hr>
                @endforeach
                </div>



            
             </div>
        </div>
 </div>
                
               
@endsection