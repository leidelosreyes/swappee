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
                    <a href="{{route('user.profile')}}"><div class="ribbon ribbon-primary">Messages</div></a>
                    <div class="clearfix"></div>
                    <div class="inbox-widget">
                    <a href="#">
                            <div class="inbox-item">
                            @if(empty($messages->m_sender->avatar)) 
                            <div class="inbox-item-img"> <img src="{{asset('image/user_icon.png')}}" class="rounded-circle" alt="avatar"></div>
                            @else
                            <div class="inbox-item-img"> <img src="{{$messages->m_sender->avatar}}" class="rounded-circle" alt="avatar"></div>
                            @endif
                               
                                <p class="inbox-item-author">{{$messages->m_sender->name}}</p>
                                <p class="inbox-item-text">{{$messages->created_at->format('Y/m/d H:i:s')}}</p>
                                <p class="inbox-item-date">
                                   
                                </p>
                            </div>
                        </a>

                    </div>
                  
                </div>
            </div>  
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
             
   

                <div class="container1">    
                <img src="{{$messages->m_sender->avatar}}" class="card-avatar"/> 
                   {!!$messages->message!!}
                    <span class="time-right">{{$messages->created_at->diffForHumans()}}</span>
                </div>
               
                @foreach($reply as $reply)
                <div class="container1 darker mt-2">
                <img src="{{$reply->m_sender->avatar}}" alt="Avatar" class="right card-avatar">
                <p>{!!$reply->message!!}</p>
                <span class="time-left">{{$reply->created_at->diffForHumans()}}</span>
                <br>
                <span class="time-left">reciever name: {{$reply->m_receiver->name}}</span>
                </div>
                @endforeach
                           
                   <!-- Button trigger modal -->
            <button type="button" style="background-color:#FFB52E;border:none;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="far fa-comment-alt"></i> reply
            </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Compose Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                      <form action="/message_reply" method ="post">
                                  @csrf
								  <input type="hidden"
                                      placeholder="Enter r id" 
                                      id="receiver_id"
                                      name="receiver_id"
                                      class="form-control @error('receiver_id') is-invalid @enderror"
                                      value="{{$messages->sender_id}}"
                                      autocomplete="receiver_id" autofocus
                                      >
                                      @error('receiver_id')
                                          <span class="invalid-feedback" role="alert ">
                                              <strong style="color:red;">{{$message}}</strong>
                                          </span>
                                      @enderror
                                            <textarea 
                                            id="message"
                                            name="message"
                                            class="form-control @error('message') is-invalid @enderror"
                                            value="{{old('message')}}"
                                            placeholder="Message Here ..."
                                            autocomplete="message" autofocus
                                            >
                                            </textarea>
                                            @error('message')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror							  
									  
                                    <div class="modal-footer">
                              
                                    <button type="sumbit" class="btn btn-primary"style="background-color:#FFB52E;border:none;"> <i class="far fa-paper-plane"></i> Send</button>
                                   </div>
                        </form>     
                  </div>
          
              </div>
           </div>
        </div>        
                           

             
            <!-- end modal -->
           
            
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
                    </div>
                
               
@endsection