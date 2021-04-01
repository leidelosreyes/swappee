
           <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                         <form action="/posts" method ="post" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group row">
                                            <label style="margin-bottom:0;">Item Name <label style="color:red;">*</label></label>
                                            <input type="text"
                                            placeholder="Enter Item Name" 
                                            id="product_name"
                                            name="product_name"
                                            class="form-control @error('product_name') is-invalid @enderror"
                                            value="{{old('product_name')}}"
                                            autocomplete="product_name" autofocus
                                            >
                                            @error('product_name')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror

                                </div>

                                <div class="form-group row">
                                            <label style="margin-bottom:0;">Choose Categories <label style="color:red;">*</label></label>
                                            <select type="text" 
                                            id="category_id"
                                            name="category_id"
                                            class="form-control  @error('category_id') is-invalid @enderror"
                                            value="{{old('category_id')}}"
                                            autocomplete="category_id" autofocus
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

                                </div>
                                <div class="form-group row">
                                            <label style="margin-bottom:0;">Choose Sub Categories <label style="color:red;">*</label></label>
                                            <select type="text" 
                                            id="sub_category_id"
                                            name="sub_category_id"
                                            class="form-control  @error('sub_category_id') is-invalid @enderror"
                                            value="{{old('sub_category_id')}}"
                                            autocomplete="sub_category_id" autofocus
                                            >
                                            @foreach ($sub_categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                            
                                            </select>
                                            @error('sub_category_id')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror

                                </div>

                                <div class="form-group row">
                                            <label style="margin-bottom:0;">Price <label style="color:red;">*</label></label>
                                            <input type="number"
                                            placeholder="0.00" 
                                            id="price"
                                            name="price"
                                            class="form-control @error('price') is-invalid @enderror"
                                            value="{{old('price')}}"
                                            autocomplete="price" autofocus
                                            >
                                            @error('price')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror

                                </div>
                                <div class="form-group row">
                                            <label style="margin-bottom:0;">Wish To Swap <label style="color:red;">*</label></label>
                                            <input type="text" 
                                            id="wishitem"
                                            placeholder="Enter Wish to swap"
                                            name="wishitem"
                                            class="form-control @error('wishitem') is-invalid @enderror"
                                            value="{{old('wishitem')}}"
                                            autocomplete="wishitem" autofocus
                                            >
                                            @error('wishitem')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror

                                </div>
                                <div class="form-group row">
                                            <label style="margin-bottom:0;">Delivery Method <label style="color:red;">*</label></label>
                                            <select type="text" 
                                            id="delivery_method"
                                            name="delivery_method"
                                            class="form-control  @error('delivery method') is-invalid @enderror"
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

                                </div>
                                <div class="row">
                                            <label style="margin-bottom:0;">Location <label style="color:red;">*</label></label>
                                            <input type="text" 
                                            id="location"
                                            name="location"
                                            class="form-control @error('location') is-invalid @enderror"
                                            value="{{old('location')}}"
                                            autocomplete="location" autofocus
                                            >
                                            @error('location')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;" >{{$message}}</strong>
                                                </span>
                                            @enderror
                                </div>
                        <div class="row mt-4">

                                            <label style="margin-bottom:0;">Description <label style="color:red;">*</label></label>
                                            <textarea 
                                            id="description"
                                            name="description"
                                            class="form-control @error('description') is-invalid @enderror"
                                            value="{{old('description')}}"
                                            autocomplete="description" autofocus
                                            >
                                            </textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
                            
                        </div>
                                
                                <div class="row">

                                        <label class="mt-4" for="image" style="margin-bottom:0;">Post Image <label style="color:red;">*</label></label>
                                        <input type="file" name="image" id="image" class="form-control-file">
                                    </div>
                                        @error('image')
                                            
                                                    <p style="color:red;">{{$message}}</p>
                                               
                                        @enderror
                                        <div class="row pt-4 p">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                            </div>
                        </div>
               </form>   
            </div>
           </div>
       </div>

