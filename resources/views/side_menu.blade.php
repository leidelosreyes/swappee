<div class="col-xl-3 d-none d-lg-block">
                <!-- Personal-Information -->
                <div class="card-box">
                    <h4 class="header-title mt-0">Menu</h4>
                    <div class="panel-body">
                        
                        <hr>
                        
                        <div class="text-left">
                         @foreach($categories as $category)
                          <a href=""><p class="font-15" value="{{$category->id}}">{{$category->name}}</p></a>
                          @endforeach
                          <hr>
                          <div class="container">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">Second Hand </p>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">new </p>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p class="font-15">old </p>
                          </div>
                        </div>
                        <ul class="social-links list-inline mt-4 mb-0">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>