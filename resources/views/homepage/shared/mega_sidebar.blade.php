
<div class="widget">
    <div class="nxp-tab-inner nxp-tab-post-two mb-4">
    <ul class="nav nav-tabs" id="nx1" role="tablist">
    <li class="nav-item" role="presentation">
    <a class="nav-link active" id="nx1-tab-1" data-toggle="pill" href="#nx1-tabs-1" role="tab" aria-selected="true">
    Recent
    </a>
    </li>
    <li class="nav-item" role="presentation">
    <a class="nav-link" id="nx1-tab-2" data-toggle="pill" href="#nx1-tabs-2" role="tab" aria-selected="false">
    Popular
    </a>
    </li>
    <li class="nav-item" role="presentation">
     <a class="nav-link" id="nx1-tab-3" data-toggle="pill" href="#nx1-tabs-3" role="tab" aria-selected="false">
    Tags
    </a>
    </li>
    </ul>
    </div>

    <div class="tab-content" id="nx1-content">
    <div class="tab-pane fade show active" id="nx1-tabs-1" role="tabpanel">
        @foreach ($trending_list as $item)
        <div class="single-post-list-wrap">
        <div class="media">
        <div class="media-left">
        <img src="{{asset('storage/articles_img')}}/{{$item->thumb_img}}" alt="img">
        </div>
        <div class="media-body">
        <div class="details">
        <div class="post-meta-single">
        <ul>
        <li><i class="fa fa-clock-o"></i>{{$item->created_at->diffForHumans()}}</li>
        </ul>
        </div>
        <h6 class="title"><a href="{{$item->Url}}">{{ $item->title }}</a></h6>
        </div>
        </div>
        </div>
        </div>
        @endforeach
    </div>

    <div class="tab-pane fade" id="nx1-tabs-2" role="tabpanel">
        @foreach ($popular as $item)
        <div class="single-post-list-wrap">
        <div class="media">
        <div class="media-left">
        <img src="{{asset('storage/articles_img')}}/{{$item->thumb_img}}" alt="img">
        </div>
        <div class="media-body">
        <div class="details">
        <div class="post-meta-single">
        <ul>
        <li><i class="fa fa-clock-o"></i>{{$item->created_at->diffForHumans()}}</li>
        </ul>
        </div>
        <h6 class="title"><a href="{{$item->Url}}">{{ $item->title }}</a></h6>
        </div>
        </div>
        </div>
        </div>
        @endforeach
    </div>
    <div class="tab-pane fade" id="nx1-tabs-3" role="tabpanel">
        @include('homepage.shared.tags')
    </div>
    </div>
    </div>