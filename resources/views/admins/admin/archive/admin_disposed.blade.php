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
                                <h4 class="header-title mb-3 mt-4">Admins Deleted</h4> 
                                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">User</th>
      <th scope="col">User-type</th>
      <th scope="col">Created At</th>
      <th scope="col">Deleted At</th>
      
    </tr>
  </thead>
  <tbody>
  
    <tr>
    @foreach($admins as $admin)
      <td> <p class="mt-2">{{$admin->name}}</p> </td>
      <td> <p class="mt-2">{{$admin->usertype}}</p> </td>
      <td> <p class="mt-2">{{$admin->created_at}}</p> </td>
      <td> <p class="mt-2">{{$admin->deleted_at}} </p> </td>
    </tr>
    @endforeach
    <tr>
 
  </tbody>
</table>
        </div>
    </div>
</div>

@endsection