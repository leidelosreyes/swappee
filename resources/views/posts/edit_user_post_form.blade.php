<form method="post" action="/posts/{{$posts->id}}" >
        @csrf
        @method('PUT')   
       <div class="row">
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
                                            value="{{$posts->product_name}}"
                                            autocomplete="product_name" autofocus
                                            >
                                            @error('product_name')
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
                                            value="{{$posts->price}}"
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
                                            value="{{$posts->wishitem}}"
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
                                            value="{{$posts->delivery_method}}"
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
                                            value="{{$posts->location}}"
                                            autocomplete="location" autofocus
                                            >
                                            @error('location')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;" >{{$message}}</strong>
                                                </span>
                                            @enderror
                                </div>
                        <div class="row mt-4">
                            <div class="form-group">
                                            <label style="margin-bottom:0;">Description <label style="color:red;">*</label></label>
                                            <textarea 
                                            id="description"
                                            name="description"
                                            rows="5"
                                            cols="100"
                                            class="form-control @error('description') is-invalid @enderror"
                                            value=""
                                            autocomplete="description" autofocus
                                            >
                                            {{$posts->description}}
                                            </textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert ">
                                                    <strong style="color:red;">{{$message}}</strong>
                                                </span>
                                            @enderror
                            </div>
                        </div>
                                
                                <!-- <div class="row">

                                        <label class="mt-4" for="image" style="margin-bottom:0;">Post Image <label style="color:red;">*</label></label>
                                        <input type="file" name="image" id="image" class="form-control-file">
                                    </div>
                                        @error('image')
                                            <strong style="color:red;">{{$message}}</strong>
                                        @enderror
                                        <div class="row pt-4 p">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                </div> -->
                                <div class="row pt-4 p">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                        </div>
                </form>   
             </div>
           </div>
       </div>
</form>