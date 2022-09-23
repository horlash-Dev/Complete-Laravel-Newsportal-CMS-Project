
@extends('layouts.article_layout')
@section('title', $name ?? "Search Results")
@section('main_content')

<div class="cat-page-area pd-bottom-80">
    <div class="container">
    <div class="row">
    <div class="col-lg-9 pd-top-50">
        @if (count($posts) > 0)
    <div class="row">
    @foreach ($posts as $item)
    <div class="col-lg-4 col-md-6">
    <div class="single-post-wrap style-box">
    <div class="thumb">
    <img src="{{asset('storage/articles_img')}}/{{$item->mini_img}}" alt="img">
    </div>
    <div class="details">
    <h6 class="title"><a href="{{$item->Url}}">{{ \Str::words($item->title,6) }}</a></h6>
    <p>{{ Str::words(strip_tags($item->description),5)  }}</p>
    <a class="btn btn-base mt-4" href="{{$item->Url}}">Read more</a>
    </div>
    </div>
    </div>
    @endforeach
    </div>



    <nav class="mt-4 text-center">
        {{$posts->links()}}
    </nav>
    @else
<h2 class="text-capitalize text-center">No Artcles found!!</h2>
    @endif
    </div>
    


    <div class="col-lg-3 pd-top-50">
    <div class="category-sitebar">
        @include('homepage.shared.categories')
    <div class="widget widget-add">
    <div class="add">
    <img class="w-100" src="assets/img/add/3.png" alt="img">
    </div>
    </div>
    <div class="widget widget-social">
    <h6 class="widget-title">Join to Us</h6>
    <ul class="social-area social-area-2">
    <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a class="youtube-icon" href="#"><i class="fa fa-youtube-play"></i></a></li>
    <li><a class="instagram-icon" href="#"><i class="fa fa-instagram"></i></a></li>
    <li><a class="google-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
    </ul>
    </div>
    @include('homepage.shared.mega_sidebar')
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
   






