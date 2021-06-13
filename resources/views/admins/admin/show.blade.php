@extends('layouts.admin_base')
@section('content')

<div class="container">
    <div class="card">
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


                                <!-- <div class="mb-4 col-xl-12">
				      <form class="d-flex"  action="{{route('search_admin')}}" method="GET">
						<input type="search" name="search_admin" class="form-control searchTerm" placeholder="What are you looking for?">
						<button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					  </form>
					</button>
                </div> -->
                                <h4 class="header-title mb-3 mt-4">
                                    Admin
                                </h4>      
                     
            @include('admins.admin.table')
     
        </div>
    </div>
</div>

@endsection