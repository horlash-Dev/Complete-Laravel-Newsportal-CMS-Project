<div class="footer-area bg-black pd-top-95">
    <div class="container">
    <div class="footer-top text-center">
    <div class="logo">
        <a class="main-logo" href="{{url("/")}}"><img src="{{asset('storage/files')}}/{{$logo->image}}" alt="img"></a>
    </div>
    </div>
    <div class="footer-bottom text-center">
    <ul class="widget_nav_menu">
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
    </ul>
    <p> &copy;  {{ now()->year}} {{ config('app.name') }} </p>
    </div>
    </div>
    </div>