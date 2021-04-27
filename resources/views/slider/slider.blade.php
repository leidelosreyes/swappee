

<div class="col-sm-12 d-none d-lg-block">
    <div class="slickSlider container  card-body">
            @foreach($categories as $category)
                <div class="col-sm-1"><a href="{{route('filter.category',$category->id)}}" value="{{$category->id}}" style="border:none;background:none;outline:none !important;outline:0px;">
                    <img src="/storage/{{$category->icon}}" class="categories-radius" style="width:70px;"/></a>
                    <p class="font-12">{{$category->name}} </p>
                </div>
            @endforeach
    </div>   
</div>

<div class="col-sm-12 d-sm-block d-md-none">
    <div class="slickSlider container  card-body">
            @foreach($categories as $category)
                <div class="col-sm-1"><a href="{{route('filter.category',$category->id)}}" value="{{$category->id}}" style="border:none;background:none;outline:none !important;outline:0px;">
                    <img src="/storage/{{$category->icon}}" class="categories-radius" style="width:50px;"/></a>
                   
                </div>
            @endforeach
    </div>   
</div>
