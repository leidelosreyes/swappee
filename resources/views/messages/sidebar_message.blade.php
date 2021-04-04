
  <div class="card-box ribbon-box">
                    @if($messages->count()==0)
                    <div class="ribbon ribbon-primary">Messages
                    </div>

                    @else
                    <div class="ribbon ribbon-primary">Messages
                    <span class="badge-notification">{{$messages->count()}}</span>
                    </div>
                    @endif
                   
                    <div class="clearfix"></div>
                  
                    <div class="inbox-widget">
                    
                     @foreach($messages as $messages)
                    
                        
                            <div class="inbox-item">
                            @if(empty($messages->m_sender->avatar)) 
                            <div class="inbox-item-img"> <img src="{{asset('image/user_icon.png')}}" class="rounded-circle" alt="avatar"></div>
                            @else
                            <div class="inbox-item-img"> <img src="{{$messages->m_sender->avatar}}" class="rounded-circle" alt="avatar"></div>
                            @endif
                               
                                <p class="inbox-item-author">{{$messages->m_sender->name}}</p>
                                <p class="inbox-item-text">{{$messages->created_at->format('Y/m/d H:i:s')}}</p>
                                <p class="inbox-item-date">
                                    <a type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-primary" href="{{route('show.message',$messages->id)}}">show</a>
                                </p>
                            </div>
                        
                    @endforeach
                    <footer>
                                <div class="card-body">
                                    <a href=""><p style="text-align:center;">See all Messages</p></a>
                                </div>
                             </footer>  
                    </div>
                </div>
               
            </div>
           