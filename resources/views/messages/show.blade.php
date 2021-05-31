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
                                        <img src = "{{$message_sender->m_sender->avatar}}" style="height:1.8rem; width:1.8rem;" alt="" class="thumb-lg rounded-circle">
                                        <div class="from">
                                            <span>{{$message_sender->m_sender->name}}</span>
                                                  {{$message_sender->m_sender->email}}
                                        </div>
                                        <div class="date"><b>{{$message_sender->created_at}}</b></div>
                                        </div>
                                        <div class="content mb-4">
                                        <p>
                                        {!! $message_sender->message!!}
                                        </p>
                                        </div>
                                        <form method="post" action="{{route('message.reply')}}">
                                        @csrf
                                         <input type="hidden" value="{{$message_sender->sender_id}}" name="receiver_id" id="receiver_id">
                                        <div class="form-group">
                                        <textarea 
                                                                            id="message"
                                                                            name="message"
                                                                            class="form-control @error('message') is-invalid @enderror"
                                                                            value="{{old('message')}}"
                                                                            placeholder="Compose Message Here ..."
                                                                            autocomplete="message" autofocus
                                                                            >
                                                                            </textarea>
                                                                            @error('message')
                                                                                <span class="invalid-feedback" role="alert ">
                                                                                    <strong style="color:red;">{{$message}}</strong>
                                                                                </span>
                                                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <button tabindex="3" type="submit" class="btn btn-primary mt-3">Send message</button>
                                        </div>
                                        </form>
                                    </div>
                                    </main>
                                </div>
                           <!-- end -->
                </div>
             </div>
        </div>
 </div>
                
               
@endsection