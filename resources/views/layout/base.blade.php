<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.min.css') }}">

    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    @yield('content')

    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/ajax.js') }}"></script>

</body>


<!-- login23:12-->
</html>
