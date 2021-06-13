@extends('layouts.admin_base')
@section('content')

<div class="container">
    <div class="card">
    <div class="card-header">
    @foreach($admins as $admin)
                             
                                   <p> {{ucfirst($admin->usertype)}} </p>
                                   @endforeach      
                                </div>
                                <div class="col-xl-12 mt-4">
                  <form class="d-flex"  action="{{route('admins_admin.search')}}" method="GET">
                <input type="search" name="search" class="form-control searchTerm" placeholder="What are you looking for?">
                <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
                </form>
              </button>
        </div>
        <div class="card-body">
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


                          
                                    
                          
            @include('admins.admin.table')
     
        </div>
    </div>
</div>

@endsection