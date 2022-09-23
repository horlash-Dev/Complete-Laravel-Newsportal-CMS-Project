<div class="navbar-area navbar-area-2">

    <div class="topbar-area">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-7 align-self-center">
    <div class="topbar-menu text-md-left text-center">
    <ul>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact</a></li>
    @guest
    <li><a href="{{ route ('login') }}">Login</a></li>
    @endguest

    @auth
    <li><a href="{{ route ('logout') }}">Signout</a></li>
    @endauth
    </ul>
     </div>
    </div>
    <div class="col-lg-6 col-md-5 text-md-right text-center">
    <div class="topbar-right">
    <ul class="social-area">
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
    <li><a href="#"><i class="fa fa-skype"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <nav class="navbar navbar-expand-lg">
    <div class="container nav-container">
    <div class="responsive-mobile-menu">
    <div class="logo d-block mr-5">
    <a class="main-logo" href="{{url("/")}}"><img src="{{asset('storage/files')}}/{{$logo->image}}" alt="img"></a>
    </div>
    <button class="menu toggle-btn d-block d-lg-none" data-target="#miralax_main_menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="icon-left"></span>
    <span class="icon-right"></span>
    </button>
    </div>
    <div class="nav-right-part nav-right-part-mobile">
    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="miralax_main_menu">
    <ul class="navbar-nav menu-open">
    <li class="current-menu-item">
    <a href="{{url("/")}}">Home</a>
    </li>
    @auth
    <li class="current-menu-item">
        <a href="{{route("dashboard")}}">Dashboard</a>
        </li>
    @endauth
    @foreach ($menu as $item)
    <li class="{{count($item::category($item->value)->subCategory) > 0 ? 'menu-item-has-children' : ""}} current-menu-item">
    <a href="{{route("categories", $item->value)}}">{{$item->value}} </a>
    @if (count($link = $item::category($item->value)->subCategory) > 0)
    <ul class="sub-menu">
        @foreach ($link as $item)
        <li><a href="{{route("subcategories", $item->name)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    @endif
    </li>
    @endforeach
    </ul>
    </div>
    <div class="nav-right-part nav-right-part-desktop">
    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
    </div>
    </div>
    </nav>
    </div>
