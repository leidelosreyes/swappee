@extends('layouts.admin_base')
@section('content')
<div class="container">
    <div class="card">
           <div class="card-header">
                                  <p>Users</p>
                                </div>
                                <div class="col-xl-12 mt-4">
                  <form class="d-flex"  action="{{route('users_admin.search')}}" method="GET">
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
           <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Verified At</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                <tbody>
                
                    <tr>
                    @foreach($users as $user)
                    
                    <td> <p class="mt-2">{{$user->name}}</p> </td>
                    <td> <p class="mt-2">{{$user->email}}</p> </td>
                    <td> <p class="mt-2">{{$user->created_at}}</p> </td>
                    <td> <p class="mt-2">{{$user->email_verified_at}}</p> </td>
                    <td>
                        <div class="d-flex mt-2">
                            <a href="#"><i class="far fa-eye" style="color: #57585a; margin-right:5px;"></i>
                            <a href="#" style="margin-right:5px;"><i class="fas fa-edit"></i></a>                     
                        </div>
                    </td>
                    
                    </tr>
                    @endforeach
                    <tr>
                
                </tbody>
          </table>
        </div>
        <div class="mt-4 mb-4 container">
           {{$users->links()}}
        </div>
    </div>
</div>

@endsection