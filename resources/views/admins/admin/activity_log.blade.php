@extends('layouts.admin_base')
@section('content')


<div class="container">
    <div class="card">
    <div class="card-header">
                                  <p>Activity Logs</p>
                                </div>
    <div class="mb-4 col-xl-12 mt-4">
				      <form class="d-flex"  action="{{route('search_activity')}}" method="GET">
						<input type="search" name="search" class="form-control searchTerm" placeholder="What are you looking for?">
						<button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					  </form>
					</button>
    </div>


        <div class="card-body">
        
                    <table class="table table-hover table-responsive-lg">
            <thead>
                <tr>
                
                <th scope="col">User name</th>
                <th scope="col">Usertype</th>
                <th scope="col">Activity</th>
                <th scope="col">Activity created</th>
                
                
                </tr>
            </thead>
            <tbody>
            @foreach($logs as $log)
            <tr>
                
                
            
                <td> <p class="mt-2">{{$log->user->name}}</p> </td>
                <td> <p class="mt-2" >{{$log->user->usertype}}</p> </td>
                <td> <p class="mt-2">{{$log->action}}</p> </td>
                <td> <p class="mt-2">{{$log->created_at->format('D/M/Y')}}</p> </td>
                
                <td>
                
                    </td>
            </tr>
            @endforeach
            </tbody>
            </table>
           {{$logs->links()}}
        </div>
    </div>
</div>

@endsection