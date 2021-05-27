
<table class="table table-hover table-responsive-lg">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">User Type</th>
      <th scope="col">Date verified</th>
      <th scope="col" style="padding-left:60px;">Action</th>
    </tr>
  </thead>
<tbody>
  
  <tr>
    @foreach($admins as $admin)
     
      <td> <p class="mt-2">{{$admin->name}}</p> </td>
      <td> <p class="mt-2">{{$admin->email}}</p> </td>
      <td> <p class="mt-2">{{$admin->usertype}}</p> </td>
      <td> <p class="mt-2" >{{$admin->email_verified_at->format('D/M/Y')}}</p> </td>
      <td>
          <div class="d-flex mt-2">
              <button class="btn btn-outline-info mr-3" data-toggle="modal" data-target="#edit{{$admin->id}}">
                   EDIT
              </button> 
              <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#view{{$admin->id}}">
                  VIEW
              </button>  
                               
          </div>
        </td>
  </tr>
</tbody>
</table>
@endforeach



<!-- Modal -->

@foreach($admins as $admin_modal)
<div class="modal fade " id="edit{{$admin->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-m">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ucfirst($admin_modal->usertype)}} credentials</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <!--Update Form-->
        <form action="{{route('update.admin',$admin_modal->id)}}" method ="post" enctype="multipart/form-data">
        @csrf
        <div class="form__div">
                                          <input type="text" 
                                          id="name"
                                          name="name"
                                          style="height:60px;"
                                          class="form__input form-control @error('name') is-invalid @enderror"
                                          value="{{$admin_modal->name}}"
                                          autocomplete="name" autofocus
                                          placeholder="">
                                          <label for="" class="form__label">Edit name <label style="color:red;">*</label></label>
                                          @error('name')
                                                  <span class="invalid-feedback" role="alert ">
                                                      <strong style="color:red;">{{$message}}</strong>
                                                  </span>
                                          @enderror
        </div>

        <div class="form__div">
                                          <input type="text" 
                                          id="email"
                                          name="email"
                                          style="height:60px;"
                                          class="form__input form-control @error('email') is-invalid @enderror"
                                          value="{{$admin_modal->email}}"
                                          autocomplete="email" autofocus
                                          placeholder="">
                                          <label for="" class="form__label">Edit E-mail <label style="color:red;">*</label></label>
                                          @error('email')
                                                  <span class="invalid-feedback" role="alert ">
                                                      <strong style="color:red;">{{$message}}</strong>
                                                  </span>
                                          @enderror
        </div>

        <div class="form__div">
        <select
                                      id="usertype"
                                      name="usertype"
                                      class="form-control form__input @error('usertype') is-invalid @enderror"
                                      value="{{$admin_modal->usertype}}"
                                      autocomplete="usertype" autofocus 
                                      style="height: 60px;">
                                    
                                                <option>admin</option>
                                                <option>content-manager-admin</option>
                                                <option>post-moderator-admin</option>
                                                <option>user-manager-admin</option>
                                        
                                      </select>
                                      @error('usertype')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                      @enderror
        </div>

        <div class="form__div">
                                          <input type="text" 
                                          id="address"
                                          name="address"
                                          style="height:60px;"
                                          class="form__input form-control @error('address') is-invalid @enderror"
                                          value="{{$admin_modal->profile->address}}"
                                          autocomplete="email" autofocus
                                          placeholder="">
                                          <label for="" class="form__label">Edit Address <label style="color:red;">*</label></label>
                                          @error('address')
                                                  <span class="invalid-feedback" role="alert ">
                                                      <strong style="color:red;">{{$message}}</strong>
                                                  </span>
                                          @enderror
        </div>

        <div class="form__div">
                                          <input type="number" 
                                          id="cellphone_no"
                                          name="cellphone_no"
                                          style="height:60px;"
                                          class="form__input form-control @error('cellphone_no') is-invalid @enderror"
                                          value="{{$admin_modal->profile->cellphone_no}}"
                                          autocomplete="email" autofocus
                                          placeholder=""
                                          
                                          >
                                          <label for="" class="form__label">Edit Address <label style="color:red;">*</label></label>
                                          @error('cellphone_no')
                                                  <span class="invalid-feedback" role="alert ">
                                                      <strong style="color:red;">{{$message}}</strong>
                                                  </span>
                                          @enderror
        </div>
        <button type="sumbit" class="btn btn-primary mt-4 mb-4"style="background-color:#FFB52E;border:none;"> <i class="fas fa-save"></i> Save</button>  
      </form>
<!--End Form--->
      </div>
    </div>
  </div>
</div>
 @endforeach





<!--Modal-->
<!-- Modal -->












@foreach($admins as $admin)
<div class="modal fade" id="view{{$admin->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ucfirst($admin->usertype)}} profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="card mt-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                          @if(empty($post->user->avatar))
                            <img src="{{asset('image/user_icon.png')}}" class="card-avatar-view" style="margin-left: 0;height:250px;width:300px;"/>
                          @else
                            <img src="{{$admin->user->avatar}}" class="card-avatar-view" style="margin-left: 0;height:250px;width:300px;"/>
                          @endif
                    </div>
                    <div class="col">
                      <h1>{{$admin->name}}</h1>
                      <hr>
                      <h2>{{$admin->email}}</h2>
                      <hr>
                      <p style="font-weight:2px;text:strong;"><b>Date verified:</b>   {{($admin->email_verified_at)->format('D M Y h:i A')}}</p><hr>
                      <p style="font-weight:2px;text:strong;"><b>Date created:</b>  {{$admin->created_at->format('D M Y h:i A')}}</p><hr>
                      <p style="font-weight:2px;text:strong;"><b>Last update:</b>   {{$admin->updated_at->format('D M Y h:i A')}}</p><hr>
                      <p style="font-weight:2px;text:strong;"><b>Phone number:</b>  {{$admin->profile->cellphone_no}}<br><hr>
                      <p style="font-weight:2px;text:strong;"><b>Address:</b>   {{$admin->profile->address}}<br><hr>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endforeach


