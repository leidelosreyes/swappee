@extends('layouts.admin_base')

@section('content')

<!-- START WEB VIEW -->
<div class="d-none d-lg-block">
<div class="container mt-4"> 
                              @if ($message = Session::get('success'))
                                <div class="alert alert-success mt-4">
                                     <p>{{$message}}</p>
                                </div>
                                @endif
                                @if ($message = Session::get('error'))
                                <div class="alert alert-danger mt-4">
                                     <p>{{$message}}</p>
                                </div>
                                @endif
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6 mb-2">
            <!-- Start Card -->
            <div class="card">
               <div class="card-body">
                    <div class="row">
                    <div class="col pr-0">
                      <span style="background-color: lightgreen;border-radius: 50%;width: 70px;height: 70px;display: flex;justify-content: center;align-items: center;"><i class="fas fa-users" style="font-size: 2rem;color: white;height: auto;"></i></span>
                    </div>
                    <div class="col">
                      <h3 style="font-size:1.2rem;padding-left: 1.2rem;">Users</h3>
                      <hr class="mt-0 mb-2" style="border: 1px solid lightgray;">
                      <span style="font-size: 1.2rem;padding-left: 2.3rem;">{{$users->count()}}</span>
                    </div>
                  </div>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
            <!-- End -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 mb-2">
            <!-- Start Card -->
            <div class="card">
               <div class="card-body">
               <div class="row">
                    <div class="col pr-0">
                      <span style="background-color: lightcoral;border-radius: 50%;width: 70px;height: 70px;display: flex;justify-content: center;align-items: center;"><i class="fas fa-crown" style="font-size: 2rem;color: white;height: auto;"></i></span>
                    </div>
                    <div class="col">
                      <h3 style="font-size:1.2rem;padding-left: 1.2rem;">Winners</h3>
                      <hr class="mt-0 mb-2" style="border: 1px solid lightgray;">
                      <span style="font-size: 1.2rem;padding-left: 2.3rem;">{{$winners->count()}}</span>
                    </div>
                  </div>
              </div>
            </div>
            <!-- End -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 mb-2">
            <!-- Start Card -->
            <div class="card">
               <div class="card-body">
               <div class="row">
                    <div class="col pr-0">
                      <span style="background-color: purple;border-radius: 50%;width: 70px;height: 70px;display: flex;justify-content: center;align-items: center;"><i class="fas fa-sync-alt" style="font-size: 2rem;color: white;height: auto;"></i></span>
                    </div>
                    <div class="col">
                      <h3 style="font-size:1.2rem;padding-left: .3rem;">Swap Post</h3>
                      <hr class="mt-0 mb-2" style="border: 1px solid lightgray;">
                      <span style="font-size: 1.2rem;padding-left: 2.3rem;">{{$swaps->count()}}</span>
                    </div>
                  </div>
              </div>
            </div>
            <!-- End -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 mb-2">
            <!-- Start Card -->
            <div class="card">
               <div class="card-body">
               <div class="row">
                    <div class="col pr-0">
                      <span style="background-color: #FFB52E;border-radius: 50%;width: 70px;height: 70px;display: flex;justify-content: center;align-items: center;"><i class="fas fa-hand-holding-usd" style="font-size: 2rem;color: white;height: auto;"></i></span>
                    </div>
                    <div class="col">
                      <h3 style="font-size:1.2rem;padding-left: 1.2rem;">Bidders</h3>
                      <hr class="mt-0 mb-2" style="border: 1px solid lightgray;">
                      <span style="font-size: 1.2rem;padding-left: 2.3rem;">{{$bidders->count()}}</span>
                    </div>
                  </div>
              </div>
            </div>
            <!-- End -->
            
          </div>
          <!-- ./col -->
        </div>
        <hr>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
      <div class="card-header">
      <p>Users</p>
                                </div>
        <div class="card-body">
        <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Verified At</th>
                           
                        </tr>
                    </thead>
                <tbody>
                
                    <tr>
                    @foreach($users as $user)
                    <th scope="row">  
                      @if(empty($user->avatar))
                    <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                      @else
                    <img src="{{$user->avatar}}" class="card-avatar"/>
                    @endif</th>
                    <td> <p class="mt-2">{{$user->name}}</p> </td>
                    <td> <p class="mt-2">{{$user->email}}</p> </td>
                    <td> <p class="mt-2">{{$user->created_at}}</p> </td>
                    <td> <p class="mt-2">{{$user->email_verified_at}}</p> </td>
                   
                    
                    </tr>
                    @endforeach
                    <tr>
                
                </tbody>
          </table>
            </div>
          </div>
        </div>
      
      
  <div class="col">
          <div class="card">
          <div class="card-header">
                <p>Leader Boards</p>
                                </div>
            <div class="card-body">
  
    <table class="table">
      <thead>
        <tr>
        <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Points</th>
        </tr>
      </thead>
      <tbody>
      @foreach($points as $point)
        <tr>
        <th scope="row">  @if(empty($point->user->avatar))
                    <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                      @else
                    <img src="{{$point->user->avatar}}" class="card-avatar"/>
                    @endif</th>
          <td>{{$point->user->name}}</td>
          <td>{{$point->amount}}</td>
          
        </tr>
      @endforeach
      </tbody>
    </table>          
        </div>
       </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- End Web View-->



<!-- START OF APP VIEW -->
<div class="d-sm-block d-md-none mb-4">

<div class="container mt-5"> 
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6 mb-2">
            <!-- Start Card -->
            <div class="card">
               <div class="card-body">
                    <div class="row">
                    <div class="col pr-0">
                      <span style="background-color: lightgreen;border-radius: 50%;width: 30px;height: 30px;display: flex;justify-content: center;align-items: center;"><i class="fas fa-users" style="font-size: .9rem;color: white;height: auto;"></i></span>
                    </div>
                    <div class="col">
                      <h3 style="font-size:.9rem;padding-left: .4rem;">Users</h3>
                      <hr class="mt-0 mb-2" style="border: 1px solid lightgray;">
                      <span style="font-size: 1rem;padding-left: 1.3rem;">0</span>
                    </div>
                  </div>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
            <!-- End -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 mb-2">
            <!-- Start Card -->
            <div class="card">
               <div class="card-body">
               <div class="row">
                    <div class="col pr-0">
                      <span style="background-color: lightcoral;border-radius: 50%;width: 30px;height: 30px;display: flex;justify-content: center;align-items: center;"><i class="fas fa-crown" style="font-size: .9rem;color: white;height: auto;"></i></span>
                    </div>
                    <div class="col">
                      <h3 style="font-size:.9rem;padding-left: .4rem;">Winners</h3>
                      <hr class="mt-0 mb-2" style="border: 1px solid lightgray;">
                      <span style="font-size: 1rem;padding-left: 1.5rem;">0</span>
                    </div>
                  </div>
              </div>
            </div>
            <!-- End -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 mb-2">
            <!-- Start Card -->
            <div class="card">
               <div class="card-body">
               <div class="row">
                    <div class="col pr-0">
                      <span style="background-color: purple;border-radius: 50%;width: 30px;height: 30px;display: flex;justify-content: center;align-items: center;"><i class="fas fa-sync-alt" style="font-size: .9rem;color: white;height: auto;"></i></span>
                    </div>
                    <div class="col">
                      <h3 style="font-size:.7rem;padding-left: .4rem;">Auctioners</h3>
                      <hr class="mt-0 mb-2" style="border: 1px solid lightgray;">
                      <span style="font-size: 1rem;padding-left: 2rem;">0</span>
                    </div>
                  </div>
              </div>
            </div>
            <!-- End -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 mb-2">
            <!-- Start Card -->
            <div class="card">
               <div class="card-body">
               <div class="row">
                    <div class="col pr-0">
                      <span style="background-color: #FFB52E;border-radius: 50%;width: 30px;height: 30px;display: flex;justify-content: center;align-items: center;"><i class="fas fa-hand-holding-usd" style="font-size: .9rem;color: white;height: auto;"></i></span>
                    </div>
                    <div class="col">
                      <h3 style="font-size:.9rem;padding-left: .4rem;">Bidders</h3>
                      <hr class="mt-0 mb-2" style="border: 1px solid lightgray;">
                      <span style="font-size: 1rem;padding-left: 1.3rem;">0</span>
                    </div>
                  </div>
              </div>
            </div>
            <!-- End -->
            
          </div>
          <!-- ./col -->
        </div>
        <hr>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Leader Bords</li>
            </ol>
          </nav>
          <!-- -->
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                </tbody>
    </table>
            </div>
          </div>
        </div>
      
      
  <div class="col pl-0" style="margin-left:1rem;">
          <div class="card">
            <div class="card-body" style="padding-bottom:.5rem">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Winners</li>
            </ol>
          </nav>
    <table class="table">
      <thead>
        <tr>
          <th class="pl-4" scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Bids</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><img src="{{asset('/image/pogi.jpg')}}" style="height:1.8rem; width:1.8rem;" alt="" class="thumb-lg rounded-circle"></th>
          <td>Mark</td>
          <td>Otto</td>
          
        </tr>
        <tr>
          <th scope="row"><img src="{{asset('/image/pogi.jpg')}}" style="height:1.8rem; width:1.8rem;" alt="" class="thumb-lg rounded-circle"></th>
          <td>Jacob</td>
          <td>Thornton</td>
         
        </tr>
      </tbody>
    </table>          
        </div>
       </div>
    </div>
  </div>
</div>
</div>
</div>

</div>
<!-- END OF APP VIEW -->











  
  
@endsection
