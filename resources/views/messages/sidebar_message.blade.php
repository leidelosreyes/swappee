
  <div class="card-box ribbon-box">
                    <div class="ribbon ribbon-primary">Messages</div>
                    <div class="clearfix"></div>
                    <div class="inbox-widget">
                    
                     @foreach($messages as $messages)
                    
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
                                    <a type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success" href="{{route('show.message',$messages->id)}}">show</a>
                                </p>
                            </div>
                        </a>
                    @endforeach
                    </div>
                </div>
            </div>