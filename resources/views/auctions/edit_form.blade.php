
          
                       
                         <form action="{{route('auctions.update',$auctions->id)}}" method ="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form__div">
                                        <input type="text" 
                                        id="product_name"
                                        name="product_name"
                                        style="height:60px;"
                                        class="form__input form-control @error('product_name') is-invalid @enderror"
                                        value="{{$auctions->product_name}}"
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
                                        id="estimated_price"
                                        name="estimated_price"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('estimated_price') is-invalid @enderror"
                                        value="{{$auctions->estimated_price}}"
                                        autocomplete="estimated_price" autofocus
                                        >
                                        <label for="" class="form__label">Price <label style="color:red;">*</label></label>
                                         @error('estimated_price')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                        @enderror
                                      
                                    </div>
                                    <div class="form__div">
                                        <input type="date" 
                                        id="end_date"
                                        name="end_date"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control @error('end_date') is-invalid @enderror"
                                        value="{{$auctions->end_date}}"
                                        autocomplete="end_date" autofocus
                                        >
                                        <label for="" class="form__label">Bid End date <label style="color:red;">*</label></label>
                                         @error('end_date')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                         @enderror
                                      
                                    </div>
                                    <div class="form__div">
                                        <input type="number" 
                                        id="bidding_start_price"
                                        name="bidding_start_price"
                                        style="height:60px;"
                                        placeholder=" "
                                        class="form__input form-control  @error('bidding_start_price') is-invalid @enderror"
                                        value="{{$auctions->bidding_start_price}}"
                                        autocomplete="bidding_start_price" autofocus
                                        >
                                        <label for="" class="form__label">Bid Starting Price <label style="color:red;">*</label></label>
                                         @error('bidding_start_price')
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
                                                <option value="{{ $category->id }}" {{ $category->id === $auctions->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
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
                                      @foreach ($sub_categories as $sub_category)
                                      <option value="{{ $sub_category->id }}" {{ $sub_category->id === $auctions->sub_category_id ? 'selected' : '' }}>{{ $sub_category->name }}</option>
                                            @endforeach
                                      </select>
                                      @error('sub_category_id')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                      @enderror
                                       <label for="" class="form__label">Choose Sub Categories <label style="color:red;">*</label></label>    
                                  </div>
                                 
                                    <label  for="image" style="margin-bottom:0;">Product Description <label style="color:red;">*</label></label>
                                    <textarea 
                                            id="description"
                                            name="description"
                                            class="form-control @error('description') is-invalid @enderror"
                                            placeholder="Enter Product Description ..."
                                            autocomplete="description" autofocus
                                            >
                                            {{$auctions->description}}
                                            </textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror

                                 
                                            <label class="mt-4" for="image" style="margin-bottom:0;">Reupload Image <label style="color:red;">*</label></label>
                                            <div class="card mt-0">
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col">
                                                          
                                                             <input type="file"name="image" class="file"accept="image/*" capture="camera" style="visibility: hidden;position: absolute;">
                                                           <div class="input-group my-3">
                                                             <input type="text" class="form-control" value="" disabled placeholder="Upload File" id="file">
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
                                              <button type="sumbit" class="btn btn-primary mb-4 form-control"style="background-color:#FFB52E;border:none;"> <i class="fas fa-save"></i> Save</button>  
               </form>   
            
        

