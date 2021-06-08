<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="John Doe">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zokowi</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	@yield('head')
</head>
<body>
	@include('includes.header')
	<div id="content">
		@yield('content')
	</div>
	@include('includes.footer')
	<script type="text/javascript">
		// dynamically sets #content div exactly underneath the navbar
		var navbarH = document.getElementById("navbar").offsetHeight;
		document.getElementById("content").style.paddingTop = navbarH+"px";
	</script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	@yield('js')
</body>
</html>