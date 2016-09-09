<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">
<link rel="stylesheet" href="{{URL::to('src/css/bootstrap.css')}}">
<title>@yield('title')</title>
@yield('style')
</head>
<body>
 
<div class="container-fluid" id="container">
<div class="row">
@include('include.header')
    </div>
<div class="row " id="main">
    <div class="col-sm-3" id="sidebar">
    @yield('sidebar');
    </div>
    <div class="col-sm-9" id="main-section">
     @yield('contents');
    </div>
    </div>
<div class="row">
     @include('include.footer')
    </div>
    </div>
</body>
    <script src="{{URL::to('src/js/jquery-3.1.0.js')}}"></script>
    <script src="{{URL::to('src/js/bootstrap.js')}}"></script>
    
</html>