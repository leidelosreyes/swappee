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


                            @foreach($admins as $admin)
                                <h4 class="header-title mb-3 mt-4">
                                    {{ucfirst($admin->usertype)}}
                                </h4> 
                                    
                            @endforeach
            @include('admins.admin.table')
     
        </div>
    </div>
</div>

@endsection