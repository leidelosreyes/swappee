
         
              
                       
                         <form action="/posts" method ="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form__div">
                                        <input type="text" 
                                        id="product_name"
                                        name="product_name"
                                        style="height:60px;"
                                        class="form__input form-control @error('product_name') is-invalid @enderror"
                                        value="{{old('product_name')}}"
                                        autocomplete="product_name" autofocus
                                        placeholder=" "
                                        onkeypress="return event.keyCode != 13;">
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
                                        onkeypress="return event.keyCode != 13;"
                                        >
                                        <label for="" class="form__label">Price <label style="color:red;">*</label></label>
                                         @error('price')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                    <div class="form__div">
                                        <input type="text"
                                        id="wishitem"
                                        placeholder=" "
                                        name="wishitem"
                                        style="height:60px;"
                                        class="form-control form__input @error('wishitem') is-invalid @enderror"
                                        value="{{old('wishitem')}}"
                                        autocomplete="wishitem" autofocus
                                        onkeypress="return event.keyCode != 13;"
                                        >
                                        <label for="" class="form__label">Wish to Swap <label style="color:red;">*</label></label>
                                        @error('wishitem')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                       
                                    </div>
                                    <div class="form__div">
                                      <select id="inputState" 
                                      id="category_id"
                                      name="category_id"
                                      class="form-control form__input @error('category_id') is-invalid @enderror"
                                      value="{{old('category_id')}}"
                                      autocomplete="category_id" autofocus
                                      style="height: 60px;"
                                      
                                      >
                                      @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                      </select>
                                      @error('category_id')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
                                       <label for="" class="form__label">Choose Categories <label style="color:red;">*</label></label>    
                                  </div>

                                  <div class="form__div">
                                      <select id="inputState" 
                                      id="sub_category_id"
                                      name="sub_category_id"
                                      class="form-control form__input @error('sub_category_id') is-invalid @enderror"
                                      value="{{old('sub_category_id')}}"
                                      autocomplete="sub_category_id" autofocus 
                                      style="height: 60px;">
                                      @foreach ($sub_categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                      </select>
                                      @error('sub_category_id')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                      @enderror
                                       <label for="" class="form__label">Choose Sub Categories <label style="color:red;">*</label></label>    
                                  </div>
                                    <div class="form__div">
                                      <select id="inputState" 
                                      id="delivery_method"
                                      name="delivery_method"
                                      style="height:60px;"
                                      class="form-control form__input @error('delivery method') is-invalid @enderror"
                                      value="{{old('delivery_method')}}"
                                      autocomplete="delivery_method" autofocus
                                            >
                                            <option>Meet Up</option>
                                            <option>Delivery</option>
                                            
                                            </select>
                                      @error('delivery_method')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                      @enderror
                                       <label for="" class="form__label">Delivery Method <label style="color:red;">*</label></label>    
                                  </div>
                                  <div class="form__div">
                                        <input type="text" 
                                         id="location"
                                         name="location"
                                         placeholder=" "
                                         style="height:60px;"
                                         class="form-control form__input @error('location') is-invalid @enderror"
                                         value="{{old('location')}}"
                                         autocomplete="location" autofocus
                                         onkeypress="return event.keyCode != 13;"
                                        >
                                        <label for="" class="form__label">Location <label style="color:red;">*</label></label>
                                        @error('location')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;" >{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                    <label  for="image" style="margin-bottom:0;">Product Description <label style="color:red;">*</label></label>
                                    <textarea 
                                            id="description"
                                            name="description"
                                            class="form-control @error('description') is-invalid @enderror"
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

                                 
                                        <label class="mt-4" for="image" style="margin-bottom:0;">Image <label style="color:red;">*</label></label>
                                        <div class="card mt-0">
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col">
                                                          
                                                             <input type="file"name="image" class="file"accept="image/*" capture style="visibility: hidden;position: absolute;">
                                                           <div class="input-group my-3">
                                                             <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                                             <div class="input-group-append">
                                                              <button type="button" class="browse btn btn-primary" style="background-color: #FFB52E;border:none;">Browse...</button>
                                                             </div>
                                                            </div>
                                                          
                                                        </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div style="text-align:center;">
                                                    <img src="" id="preview" class="img-thumbnail" style="width:50%; border:none;">
                                                    </div>
                                                </div>
                                            </div>
                                  
                                              @error('image')
                                                  
                                                          <p style="color:red;">{{$message}}</p>
                                                    
                                              @enderror  
                                              <button type="sumbit" class="btn btn-primary form-control mt-4 mb-4"style="background-color:#FFB52E;border:none;"> <i class="fas fa-save"></i> Save</button>  
               </form>   
            
          
   

