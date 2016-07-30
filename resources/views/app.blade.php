<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ elixir("css/all.css") }}">
	<title>Sk8spotsMx</title>
</head>
<body>

	<header>@include('partials.nav')</header>

	<section>@yield('content')</section>

	<footer>@include('partials.footer')</footer>
	
	<script src="{{ elixir("js/all.js") }}"></script>
	
</body>
</html>