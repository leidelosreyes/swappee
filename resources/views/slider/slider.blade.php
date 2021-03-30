<div class="col-sm-12">
    <div class="slickSlider container card card-body pl-1" style="display: block;">
            @foreach($categories as $category)
                          <div class="col-sm-1"><a href="" value="{{$category->id}}"><img src="/storage/{{$category->icon}}" class="categories-radius"/></a><p class="font-15">{{$category->name}} </p></div>
            @endforeach
    </div>   
</div>