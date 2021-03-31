

<div class="col-sm-12">
    <div class="slickSlider container card card-body pl-1">
            @foreach($categories as $category)
                <div class="col-sm-1"><a href="{{route('filter.category',$category->id)}}" value="{{$category->id}}" style="border:none;background:none;outline:none !important;outline:0px;">
                    <img src="/storage/{{$category->icon}}" class="categories-radius" style="width:90px;"/></a>
                    <p class="font-15">{{$category->name}} </p>
                </div>
            @endforeach
    </div>   
</div>
