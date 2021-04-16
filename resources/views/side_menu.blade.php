
                <!-- side menu -->
                <div class="card-box">
                    <h4 class="header-title mt-0">Categories</h4>
                    <div class="panel-body">
                        
                        <hr>
                        
                        <div class="text-left">
                        <a href="{{route('home')}}"><p class="font-15" >All Products </p></a>
                         @foreach($categories as $category)
                          <a href="{{route('filter.category',$category->id)}}"><p class="font-15" value="{{$category->id}}">{{$category->name}}</p></a>
                          @endforeach
                          <hr>
                          
                            <form action="{{route('filter.price')}}" method="GET">
                                <input id="ex6" name="price"  
                                data-slider-id="price-slider" 
                                data-slider-tooltip="hide" 
                                onChange="this.form.submit()" 
                                type="text" data-slider-min="1" 
                                data-slider-max="100000" 
                                data-slider-step="1" 
                                data-slider-value="3"
                                />
                               
                               <span id="ex6CurrentSliderValLabel"class="a-color">CURRENT PRICE: <span id="ex6SliderVal">{{number_format(0)}}</span></span>
                               
                            </form>
                                         
                          <hr>
                          @foreach($sub_categories as $sub_category)
                            <form action="{{route('filter.sub_category',$sub_category->id)}}" method="GET">
                                <div class="container">
                                  <input type="checkbox" class="form-check-input" name="sub_category" value="{{$sub_category->id}}"
                                  onChange="this.form.submit()">
                                  <p class="font-15">{{$sub_category->name}} </p>
                                </div>
                            </form>  
                          @endforeach
                         
                        </div>
                        
                    </div>
              
          <!-- end side menu -->