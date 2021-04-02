<div class="col-xl-3 d-none d-lg-block">
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
                        <ul class="social-links list-inline mt-4 mb-0">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
          <!-- end side menu -->