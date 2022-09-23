<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
     <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=""> 
    <title> {{config('app.name')}} | @yield('title') </title>
    <link rel="apple-touch-icon" href="{{ asset('storage/files')}}/{{$favicon->image ?? null }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/files')}}/{{$favicon->image ?? null }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    @include('admin.template.top')
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

  @include('admin.template.header')


    <!-- BEGIN: Main Menu-->

  @include('admin.partials.sidebar')

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
       
        <div class="content-body">
          @yield('content')
        </div>
      </div>
    </div>
    <!-- END: Content-->



    @include('admin.template.footer')

    @include('admin.template.bottom')
  </body>
  <!-- END: Body-->

</html>