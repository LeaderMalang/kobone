<!DOCTYPE html>
<html lang="zxx">



<head>
    @section('head')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>@yield('title')</title>
	<!-- Standard -->
	<link rel="shortcut icon" href="{{URL::asset('/images/ficon.png')}}">

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}" type="text/css">
	<!-- Dropdownhover CSS -->
	<link rel="stylesheet" href="{{URL::asset('/css/bootstrap-dropdownhover.min.css')}}" type="text/css">
	<!-- fonts awesome -->
	<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" >
	<!-- Plugin CSS -->
	<link rel="stylesheet" href="{{URL::asset('/css/animate.min.css')}}" type="text/css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{URL::asset('/css/style.css')}}" type="text/css">
	<!-- Owl Carousel URL::asset -->
	<link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}" type="text/css" >
	<link rel="stylesheet" href="{{URL::asset('css/owl.theme.css')}}" type="text/css" >

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

      <![endif]-->
        @show
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="loading">
		</div>
	</div>
    @include('view.header')
    @yield('content')

    @include('view.footer')
</body>

</html>
