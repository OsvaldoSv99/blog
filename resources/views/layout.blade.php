<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Dragon Blanco')</title>
	<style>
		.active a{
			color:red;
			text-decoration:none;
		}
	</style>
</head>
<body>
@include('parciales.nav')
@yield('contenido')
</body>
</html>