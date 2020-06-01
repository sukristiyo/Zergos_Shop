<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{url('/assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{url('/assets/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('/assets/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/assets/css/custom.css')}}">

</head>

<body>
        @yield('content')
        <!-- ALL JS FILES -->
        <script src="{{url('/assets/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{url('/assets/js/popper.min.js')}}"></script>
        <script src="{{url('/assets/js/bootstrap.min.js')}}"></script>
        <!-- ALL PLUGINS -->
        <script src="{{url('/assets/js/jquery.superslides.min.js')}}"></script>
        <script src="{{url('/assets/js/images-loded.min.js')}}"></script>
        <script src="{{url('/assets/js/isotope.min.js')}}"></script>
        <script src="{{url('/assets/js/baguetteBox.min.js')}}"></script>
        <script src="{{url('/assets/js/form-validator.min.js')}}"></script>
        <script src="{{url('/assets/js/contact-form-script.js')}}"></script>
        <script src="{{url('/assets/js/custom.js')}}"></script>
</body>

</html>