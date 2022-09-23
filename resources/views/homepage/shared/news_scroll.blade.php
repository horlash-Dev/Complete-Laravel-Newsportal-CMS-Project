<div class="container">
    <div class="section-title">
    <div class="row">
    <div class="col-md-9">
    <h6 class="title">Popular Tags</h6>
    </div>
    </div>
    </div>
    <div class="row custom-gutters-14">
        @foreach ($sub_sort as $item)
    <div class="col-md-2 col-sm-4">
    <div class="single-category-inner">
    <a class="tag-base tag-blue" href="{{route("subcategories", $item->name)}}">{{$item->name}} <span class="notice">{{count($item->article_subCategory)}}</span> </a>
    </div>
    </div>
    @endforeach
    </div>
    </div>

