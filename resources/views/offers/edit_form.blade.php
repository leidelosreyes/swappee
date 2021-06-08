
<form action="" method ="post" enctype="multipart/form-data">
                                   @csrf
                             <div class="form__div">
                                        <input type="text" 
                                        id="product_name"
                                        name="product_name"
                                        style="height:60px;"
                                        class="form__input form-control @error('product_name') is-invalid @enderror"
                                        value="{{$offers->product_name}}"
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
                                        value="{{$offers->price}}"
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
                                      <select id="inputState" 
                                      id="delivery_method"
                                      name="delivery_method"
                                      style="height:60px;"
                                      class="form-control form__input @error('delivery method') is-invalid @enderror"
                                      value="{{old('delivery_method')}}"
                                      autocomplete="delivery_method" autofocus
                                            >
                                          
                                      <option {{ $offers->delivery_method ? 'selected' : '' }}>{{ $offers->delivery_method }}</option>
                                      @if($offers->delivery_method == "Meet Up") 
                                      <option >Delivery</option>
                                      @else 
                                      <option >Meet up</option>
                                      @endif
                                                  
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
                                         value="{{$offers->location}}"
                                         autocomplete="location" autofocus
                                        >
                                        <label for="" class="form__label" style="background:none;">Location <label style="color:red;">*</label></label>
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
                                                class="form-control form_input @error('description') is-invalid @enderror"
                                                value="{{ $offers->description }}"
                                                placeholder="Enter Product Description ..."
                                                autocomplete="description" autofocus
                                                >
                                                {{$offers->description}}
                                                </textarea>
                                               
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert ">
                                                        <strong style="color:red;">{{$message}}</strong>
                                                    </span>
                                                @enderror

                                  
                                        
                                             
                                                    <button type="sumbit" class="btn btn-primary mt-4"style="background-color:#FFB52E;border:none;"></i> Save</button>  
                                              

                                            
                                            

                        </form>