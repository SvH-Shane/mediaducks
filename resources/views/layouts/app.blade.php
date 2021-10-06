<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') • mediaducks</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="medium" content="image">
	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:image" content="">
	<meta property="og:url" content="">
	<meta property="og:description" content="">

	<meta name="application-name" content="mediaducks">
	<meta name="theme-color" content="#f3f3f3">

	<link rel="image_src" href="">
	@include('workers.head-links')
	@include('workers.script-navigation')
</head>
<body>
	@include('components.nav')
	<div id="app">
		@yield('content')
	</div>
</body>
	@include('workers.script-navigation-btm')

</html>
