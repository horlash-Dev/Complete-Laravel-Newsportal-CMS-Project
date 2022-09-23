<!DOCTYPE html>
<html lang="zxx">


<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--  <title>{{$title->value}} -</title>  --}}
<title> @yield('title') </title>

<link rel=icon href="{{ asset('storage/files')}}/{{$favicon->image }}" sizes="20x20" type="image/png">
@include('template.top')
</head>
<body>

<div class="preloader" id="preloader">
<div class="preloader-inner">
<div class="spinner">
<div class="dot1"></div>
<div class="dot2"></div>
</div>
</div>
</div>
@include('homepage.partials.search')
<div class="body-overlay" id="body-overlay"></div>
@include('template.header')
@include('homepage.partials.breadcrumb')

 @yield('main_content')


@include('template.footer')
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
@include('template.bottom')
</body>
</html>