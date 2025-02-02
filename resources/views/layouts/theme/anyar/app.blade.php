<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<meta content="{{ csrf_token() }}" name="csrf-token">

		<title>
			{{ $app_settings->name }}
		</title>

		@if (env('APP_ENV') === 'production')
			<link href="{{ asset('build/assets/app-DlIfEsrR.css') }}" rel="stylesheet">
			<link href="{{ asset('build/assets/app-ZTGNsFtH.css') }}" rel="stylesheet">
			<link href="{{ asset('build/assets/anyar-pvi7wNRl.css') }}" rel="stylesheet">
		@else
			@vite([
				'resources/js/app.js',
				'resources/sass/app.scss',
				'resources/js/theme/anyar.js',
				'resources/sass/theme/anyar.scss',
				'resources/sass/components/buttons.scss',
				'resources/sass/components/cards.scss',
			])
		@endif

		@livewireStyles
		@stack('CSS')
	</head>

	<body>
		<div id="preloader"></div>

		@include('layouts.theme.anyar.template.header')

		@include('layouts.theme.anyar.template.aside-left')

		@yield('banner')
			
		<main class="main" id="main">
			@yield('breadcrumb')
			@yield('content')
		</main>

		@include('layouts.theme.anyar.template.aside-right')

		@include('layouts.theme.anyar.template.footer')

		{{-- BUTTON: BACK TO TOP --}}
		<a class="back-to-top d-flex align-items-center justify-content-center" href="#">
			<i class='bx bxs-up-arrow'></i>
		</a>
		
		@livewire('modal.create')
		@livewire('modal.update')
		@livewire('modal.delete')
		
		@if (env('APP_ENV') === 'production')
			<script src="{{ asset('build/assets/app-Bo6JFT0S.js') }}"></script>
			<script src="{{ asset('build/assets/anyar-BJsVquAm.js') }}"></script>
		@endif
	
		@livewireScripts
		@stack('JS')
	</body>

</html>