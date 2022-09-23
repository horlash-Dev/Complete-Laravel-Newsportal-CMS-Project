
    <div class="widget widget_tag_cloud">
    <div class="tagcloud tagclouds">
    @foreach ($tag_sort as $tag)
    <a href="{{route("tags", \Str::slug($tag))}}">{{$tag}}</a>
    @endforeach
    </div>
    </div>