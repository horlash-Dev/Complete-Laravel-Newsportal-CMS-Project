{{--  <div class="widget widget-category">
    <h6 class="widget-title">Category</h6>
    <div class="row custom-gutters-14">
     @foreach ($categories_sort as $category)
    <div class="col-lg-6 col-sm-6">
    <div class="single-category-inner">
    <img src="{{asset('storage/articles_img/avatar_8867d.png')}}"  alt="img">
    <a class="tag-base tag-blue" href="#">{{$category}}</a>
    </div>
    </div>
 @endforeach
    </div>
    </div>  --}}

    <div class="widget widget_tag_cloud">
      <h5 class="widget-title">Categories</h5>
      <div class="tagcloud tagclouds">
         @foreach ($categories_sort as $category)
      <a href="{{route("categories", $category)}}">{{$category}}</a>
      @endforeach
      </div>
      </div>