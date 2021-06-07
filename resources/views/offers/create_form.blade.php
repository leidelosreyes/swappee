           
              
                                  <form action="/offers" method ="post" enctype="multipart/form-data">
                                   @csrf
                            <div class="form-group row">
                                      <input type="hidden"
                                      placeholder="Enter r id" 
                                      id="receiver_id"
                                      name="receiver_id"
                                      class="form-control @error('receiver_id') is-invalid @enderror"
                                      value="{{$post->user->id}}"
                                      autocomplete="receiver_id" autofocus
                                      >
                                      @error('receiver_id')
                                          <span class="invalid-feedback" role="alert ">
                                              <strong style="color:red;">{{$message}}</strong>
                                          </span>
                                      @enderror

                            </div>
                            <div class="form-group row">
                                      <input type="hidden"
                                      placeholder="Enter r id" 
                                      id="post_id"
                                      name="post_id"
                                      class="form-control @error('post_id') is-invalid @enderror"
                                      value="{{$post->id}}"
                                      autocomplete="post_id" autofocus
                                      >
                                      @error('post_id')
                                          <span class="invalid-feedback" role="alert ">
                                              <strong style="color:red;">{{$message}}</strong>
                                          </span>
                                      @enderror

                            </div>
                            <div class="form__div">
                                        <input type="text" 
                                        id="product_name"
                                        name="product_name"
                                        style="height:60px;"
                                        class="form__input form-control @error('product_name') is-invalid @enderror"
                                        value="{{old('product_name')}}"
                                        autocomplete="product_name" autofocus
                                        placeholder=" ">
                                        <label for="" class="form__label">Product Name <label style="color:red;">*</label></label>
                                        @error('product_name')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
                                    </div>
                             
                                    <div class="form__div">
                                        <input type="number" 
                                        id="price"
                                        name="price"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('price') is-invalid @enderror"
                                        value="{{old('price')}}"
                                        autocomplete="price" autofocus
                                        >
                                        <label for="" class="form__label">Price <label style="color:red;">*</label></label>
                                         @error('price')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                   @if($post->delivery_method=="Meet Up")
                                    <div class="form__div">
                                      <select id="inputState" 
                                      readonly
                                      id="delivery_method"
                                      name="delivery_method"
                                      style="height:60px;"
                                      class="form-control form__input @error('delivery method') is-invalid @enderror"
                                      value="{{old('delivery_method')}}"
                                      autocomplete="delivery_method" autofocus
                                            >
                                            <option>{{$post->delivery_method}}</option>
                                            
                                            
                                            </select>
                                      @error('delivery_method')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                      @enderror
                                       <label for="" class="form__label"style="background:none;">Delivery Method <label style="color:red;">*</label></label>    
                                  </div>
                                  <div class="form__div">
                                        <input type="text"
                                         readonly
                                         id="location"
                                         name="location"
                                         placeholder=" "
                                         style="height:60px;"
                                         class="form-control form__input @error('location') is-invalid @enderror"
                                         value="{{$post->location}}"
                                         autocomplete="location" autofocus
                                        >
                                        <label for="" class="form__label" style="background:none;">Location <label style="color:red;">*</label></label>
                                        @error('location')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;" >{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                    @else
                                    <div class="form__div">
                                      <select id="inputState" 
                                      readonly
                                      id="delivery_method"
                                      name="delivery_method"
                                      style="height:60px;"
                                      class="form-control form__input @error('delivery method') is-invalid @enderror"
                                      value="{{old('delivery_method')}}"
                                      autocomplete="delivery_method" autofocus
                                            >
                                            <option>{{$post->delivery_method}}</option>
                                            
                                            
                                            </select>
                                      @error('delivery_method')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                      @enderror
                                       <label for="" class="form__label"style="background:none;">Delivery Method <label style="color:red;">*</label></label>    
                                  </div>
                                  <div class="form__div">
                                        <input type="text"
                                       
                                         id="location"
                                         name="location"
                                         placeholder=" "
                                         style="height:60px;"
                                         class="form-control form__input @error('location') is-invalid @enderror"
                                         value="{{Auth::user()->profile->address}}"
                                         autocomplete="location" autofocus
                                        >
                                        <label for="" class="form__label" style="background:none;">Location <label style="color:red;">*</label></label>
                                        @error('location')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;" >{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                    @endif
                                    <label  for="image" style="margin-bottom:0;">Product Description <label style="color:red;">*</label></label>
                                        <textarea 
                                                id="description"
                                                name="description"
                                                class="form-control form_input @error('description') is-invalid @enderror"
                                                value="{{old('description')}}"
                                                placeholder="Enter Product Description ..."
                                                autocomplete="description" autofocus
                                                >
                                                </textarea>
                                               
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert ">
                                                        <strong style="color:red;">{{$message}}</strong>
                                                    </span>
                                                @enderror

                                  
                                                <label class="mt-4" for="image" style="margin-bottom:0;">Post Image <label style="color:red;">*</label></label>
                                            <div class="card mt-0">
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col">
                                                          
                                                             <input type="file"name="image" class="file" accept="image/*" style="visibility: hidden;position: absolute;">
                                                           <div class="input-group my-3">
                                                             <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                                             <div class="input-group-append">
                                                              <button type="button" class="browse btn btn-primary" style="background-color: #FFB52E;border:none;">Browse...</button>
                                                             </div>
                                                            </div>
                                                          
                                                        </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div style="text-align:center;">
                                                    <img src="" id="preview" class="img-thumbnail" style="width:30%; border:none;">
                                                    </div>
                                                </div>
                                            </div>
                                              @error('image')
                                                  
                                                          <p style="color:red;">{{$message}}</p>
                                                    
                                              @enderror 
                                             
                                                    <button type="sumbit" class="btn btn-primary mt-4"style="background-color:#FFB52E;border:none;"> <i class="far fa-paper-plane"></i> Send Offer</button>  
                                              

                                            
                                            

                        </form>   
                  
                 