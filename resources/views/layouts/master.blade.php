<!DOCTYPE html>
<html>
<head>
	<title>Kawulo | @yield('title')</title>
	@include('layouts.link')
</head>
<body>
	<div class="header">
		@include('layouts.header')
	</div>
	<div class="grow">
		@yield('grow')
	</div>
	<div>
		@yield('content')
	</div>
	<div class="footer w3layouts">
		@include('layouts.footer')
	</div>
</body>
</html>