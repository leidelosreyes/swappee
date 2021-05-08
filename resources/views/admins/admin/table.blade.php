<table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
  
  <tr>
    @foreach($admin as $admin)
     
      <td> <p class="mt-2">{{$admin->name}}</p> </td>
      <td> <p class="mt-2">{{$admin->email}}</p> </td>
      <td> <p class="mt-2">{{$admin->usertype}}</p> </td>
      <td>  {{$admin->email_verified_at}} </td>
      <td>
                                    <div class="d-flex mt-2">
                                    <a href="#"><i class="far fa-eye" style="color: #57585a; margin-right:5px;"></i>
                                    <a href="#" style="margin-right:5px;"><i class="fas fa-edit"></i></a>
                                   
                                    {!! Form::open(['route' => ['delete.admin', $admin->id], 'method' => 'delete']) !!}
                                        <button class="delete form-control btn-sm mt-2" style="height:30px;" >Delete</button>
                                    {!!Form::close() !!}
                                
                                    </div>
                                    </td>
      @endforeach
    </tr>
  </tbody>
</table>


