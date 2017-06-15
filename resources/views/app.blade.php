<!DOCTYPE html>
<html>
<head>
	@include('partials.metas')
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ elixir("css/all.css") }}">
	<title>Sk8spotsMx</title>
</head>
<body>

	<header>@include('partials.nav')</header>

	@include('partials.flash-message')
	
	<section>@yield('content')</section>

	<section>@include('partials.adsense')</section>

	<footer>@include('partials.footer')</footer>
	@include('partials.google')
	@include('partials.hotjar')
	<script src="{{ elixir("js/all.js") }}"></script>

	@if(\Request::path() == '/')
		<script async defer src="//maps.googleapis.com/maps/api/js?key=AIzaSyAP9skepfDL3L5pB4oF0Y1eey1BdF2trcI"></script>
	@else
		<script async defer src="//maps.googleapis.com/maps/api/js?key=AIzaSyAP9skepfDL3L5pB4oF0Y1eey1BdF2trcI&amp;callback=initMapDrag"></script>
	@endif
	
</body>
</html>