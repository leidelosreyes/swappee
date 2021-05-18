@extends('layouts.layout2')
 @section('content')
 <div class="container mt-4">
    @include('User.profilebar') 
    <div class="row">
        <div class="col-xl-3 d-none d-lg-block">
                    <!-- side menu-->                   
                            @include('User.sidemenu')
                    <!-- end side menu-->              
        </div>  
        <section class="products-section col-xl-9 mb-4">
          <!-- side modal for mobile view -->
          
         <!-- end side modal --> 
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success mt-4">
                                        <p>{{$message}}</p>
                                    </div>
                                    @endif                 
                    <!-- create form -->
                    <h4 class="header-title mb-3 mt-4">Order List</h4> 
                     <!-- Order List -->
                     <hr>
                        <div class="card">
                        <div class="card-body">
                                <table class="table  table-borderless table-responsive">
                            <thead style="text-align:center; background-color: whitesmoke;">
                                <tr>
                               
                                <th scope="col">ID</th>
                                <th scope="col">Created</th>
                                <th scope="col">Status</th>
                                <th scope="col">Price</th>
                                <th scope="col">Destination Address</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                          
                                <tr>
                              
                                <td><p style="color:#FFB52E;">{{$courier->order->order_id}}</p></td>
                                <td>{{$courier->order->created_datetime}}</td>
                                <td>{{$courier->order->status}}</td>
                                <td> <p style="color:#FFB52E;">{{$courier->order->payment_amount}}</p></td>
                                <td>
                            
                                  1.{{$courier->order->points['0']->address}}
                                  <br>                                
                                  2.{{$courier->order->points['1']->address}}
                                
                                </td>
                                </tr>
                             </tbody>
                            </table>

                        </div>
                        </div>
                    </div>
                     <!-- End Order list-->
        </section>    
    </div>
</div>

 
@endsection
