<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Work project for work2live">
		<meta name="author" content="Javier Rocha">
		<title>@yield('title') | Hotel 2 Live | Work project for work2live</title>
		<link rel="icon" href="favicon.ico" type="image/ico" sizes="32x32">
		<link href="{{ asset('_assets/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('_assets/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('_assets/css/vendors.css') }}" rel="stylesheet">
		<link href="{{ asset('_assets/css/theme.css') }}" rel="stylesheet">
	</head>
	<body>
		<header class="header menu_fixed">
			@include('includes.header')
		</header>
		<div id="page">
			<main>
				@yield('main')
			</main>
			<footer>
				@include('includes.footer')
			</footer>
		</div>
		@include('includes.scripts')
	</body>
</html>