@extends('layouts.article_layout')
@section('title',  $author->username  ?? null)
@section('main_content')
<div class="blog-page-area pd-bottom-80">
    <div class="container">
    <div class="row">
    <div class="col-lg-9 pd-top-50">
    <div class="author-area style-two">
    <div class="media">
        @if ($author->avatar != "")
        <img style="border-radius: 5px;" src="{{asset('storage/avatar')}}/{{$author->avatar}}" alt="img"> 
        @else 
        <img style="border-radius: 5px;" src="{{asset('storage/avatar/user.png')}}" alt="img">  
        @endif
    <div class="media-body align-self-center mt-4 mt-md-0">
    <h4 class="mb-0">{{$author->fullname}}</h4>
    <strong class="mb-3 d-block">About me</strong>
    <p>{!! $author->bio ?? null !!}</p>
    <ul class="social-area social-area-2 mt-4">
    <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a class="youtube-icon" href="#"><i class="fa fa-youtube-play"></i></a></li>
    <li><a class="instagram-icon" href="#"><i class="fa fa-instagram"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>


    <div class="col-lg-3 pd-top-50">
    <div class="category-sitebar">
        @include('homepage.shared.categories')
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
   