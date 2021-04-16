
           <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                       
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
                                    <div class="form__div">
                                        <input type="text"
                                        id="wishitem"
                                        placeholder=" "
                                        name="wishitem"
                                        style="height:60px;"
                                        class="form-control form__input @error('wishitem') is-invalid @enderror"
                                        value="{{old('wishitem')}}"
                                        autocomplete="wishitem" autofocus
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
                                      style="height: 60px;">
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

                                 
                                        <label class="mt-4" for="image" style="margin-bottom:0;">Post Image <label style="color:red;">*</label></label>
                                        <input type="file" name="image" id="image" class="form-control-file">
                                  
                                              @error('image')
                                                  
                                                          <p style="color:red;">{{$message}}</p>
                                                    
                                              @enderror  
                                              <button type="sumbit" class="btn btn-primary mt-4"style="background-color:#FFB52E;border:none;"> <i class="fas fa-save"></i> Save</button>  
               </form>   
            
           </div>
       </div>

