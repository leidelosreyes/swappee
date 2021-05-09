<table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">User Type</th>
      <th scope="col">Verified At</th>
      <th scope="col">Actions</th>
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
                                  
                                    </div>
                                    </td>
    
    </tr>
    @endforeach
    <tr>
 
  </tbody>
</table>