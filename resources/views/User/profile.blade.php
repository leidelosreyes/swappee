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
                <li class="breadcrumb-item active" aria-current="page">Products</li>
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
                            <h4 class="header-title mb-3">My Product</h4> 
                           
                            <a class="btn btn-primary float-right" href="{{route('posts.create')}}" style="background-color:#FFB52E; border:none;">Add Product</a>        
                    <form class="d-flex mb-2 mt-2"  action="{{route('search.profile_product')}}" method="GET">
						<input class="form-control mr-sm-2 search_box_category" type="search" name="search" placeholder="Search your items" aria-label="Search">
   					</form>
                       @forelse($posts as $post)
                        @empty
                            <div class="alert alert-danger mt-4">
                                <p><i class="fas fa-exclamation-triangle" style="color:red;"></i> No Items Found </p>
                             </div>
                        @endforelse        
                     
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                            @foreach($posts as $post)
                                <tr>
                                    <td style="width:100px;"><img src="/storage/{{$post->image}}"  style=" max-width:4rem; max-height:5rem;"id="show-img" ></td>
                                    <td style="max-width:120px;height:20px;"><div class="mt-2"style="height:20px; overflow:hidden">{{$post->product_name}}</div></td>
                                    <td style=""><div class="mt-2">PHP {{$post->price}}</div></td>
                                    <td style=""><div class="mt-2"><i class="far fa-clock" style="color:green"></i> {{$post->created_at->diffForHumans()}}</div></td>
                                    
                                    <td>
                                    <div class="d-flex mt-2">
                                    <a href="{{route('auth-posts.show',$post->id)}}"><i class="far fa-eye" style="color: #57585a; margin-right:5px;"></i>
                                    <a href="{{route('posts.edit',$post->id)}}" style="margin-right:5px;"><i class="fas fa-edit"></i></a>
                                    {!! Form::open(['route' => ['posts.delete', $post->id], 'method' => 'delete']) !!}
                                            <button class="delete" style="border:none;background:none;outline:none !important;outline:0px;">
                                                <i class="fas fa-trash-alt" style="color:red;"></i>
                                            </button>
                                    {!!Form::close() !!}
                                    </div>
                                    </td>
                                </tr>
                              
                                @endforeach
                             
                            </tbody>
                        </table>
                      
                    </div>
            
            
                    {{ $posts->links() }}
            </div>
            <!-- end col -->
           

            
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
                    </div>
                
               
@endsection