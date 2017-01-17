<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ URL::to('/css/main.css') }}">
	@yield('styles')
</head>
<body>
	@include('includes.header')
	<div class="main">
		@yield('content')
	</div>
</body>
</html>