<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
	<head>
		@include('_partials.meta')
	</head>
	<body class="font-sans text-slate-700 text-base">

		@include('_partials.navigation')
		
		@yield('main')

		@include('_partials.footer')

	</body>
</html>