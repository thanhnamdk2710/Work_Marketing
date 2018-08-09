<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>404 Error | E-Shopper</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('frontend/images/home/favicon.png') }}">
</head>

<body>
<div class="container text-center">
    <div class="logo-404">
        <a href="{{ route('home') }}"><img src="{{ asset('frontend/images/home/logo.png') }}" alt="" /></a>
    </div>
    <div class="content-404">
        <img src="{{ asset('frontend/images/404/404.png') }}" class="img-responsive" alt="" />
        <h1><b>OPPS!</b> Chúng tôi không thể tìm thấy trang này!</h1>
        <h2><a href="{{ route('home') }}">Trở về Trang Chủ</a></h2>
    </div>
</div>

<script src="{{ asset('frontend/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
</body>
</html>