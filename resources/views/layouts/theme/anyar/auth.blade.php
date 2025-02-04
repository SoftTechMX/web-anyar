<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<meta content="{{ csrf_token() }}" name="csrf-token">

		<title>
			{{ config('app.name') }}
		</title>

		@if (env('APP_ENV') === 'production')
			<link href="{{ asset('build/assets/app-DlIfEsrR.css') }}" rel="stylesheet">
			<link href="{{ asset('build/assets/app-ZTGNsFtH.css') }}" rel="stylesheet">
			<link href="{{ asset('build/assets/anyar-pvi7wNRl.css') }}" rel="stylesheet">
		@else
			@vite(['resources/js/app.js', 'resources/sass/app.scss', 'resources/js/theme/anyar.js', 'resources/sass/theme/anyar.scss'])
		@endif

		@livewireStyles
		@stack('CSS')

		<style>
			html,
			body {
				background: #000;
				color: #fff;
				margin: 0;
				padding: 0;
				width: 100dvw;
				height: 100dvh;
				display: grid;
				place-items: center;
			}

			canvas {
				width: 100dvw;
				height: 100dvh;
			}

			main{
				position: absolute;
				margin: auto;
			}
		</style>
	</head>

	<body>
		<div id="preloader"></div>

		<canvas></canvas>

		<main class="main col-12" id="main">
			@yield('content')
		</main>


		@if (env('APP_ENV') === 'production')
			<script src="{{ asset('build/assets/app-Bo6JFT0S.js') }}"></script>
			<script src="{{ asset('build/assets/anyar-BJsVquAm.js') }}"></script>
		@endif

		@livewireScripts
		@stack('JS')

		{{-- BACKGROUND ANIMATION SCRIPT --}}
		<script>
			const canvas = document.querySelector('canvas')
			const cx = canvas.getContext('2d')

			const Interpolation = (() => {
				function linear(x, a, b) {
					return (1 - x) * a + x * b
				}

				function quadratic(x, a, b, c) {
					return linear(x, linear(x, a, b), linear(x, b, c))
				}

				function cubic(x, a, b, c, d) {
					return linear(x, quadratic(x, a, b, c), quadratic(x, b, c, d))
				}

				return {
					linear,
					quadratic,
					cubic
				}
			})()

			const Random = ((fn) => {
				const from = function(a, b) {
					return Interpolation.linear(fn(), a, b)
				}

				return {
					from
				}
			})(Math.random)

			class Point {
				constructor(x = 0, y = 0) {
					this.x = x || 0
					this.y = y || 0
				}

				set(x, y) {
					this.x = x
					this.y = y
					return this
				}

				copy({
					x,
					y
				}) {
					return this.set(x, y)
				}

				clone() {
					return new Point(this.x, this.y)
				}

				scale(s) {
					return this.set(this.x * s, this.y * s)
				}

				floor() {
					return this.set(
						Math.floor(this.x),
						Math.floor(this.y)
					)
				}
			}

			const positions = Array.from(new Array(8192), () => {
				return new Point(
					Random.from(-128, 128),
					Random.from(-256, 256)
				)
			})

			const attractor = {
				a: 1.7,
				b: 1.7,
				c: 0.6,
				d: 1.2
			}

			function updateAttractor({
				a,
				b,
				c,
				d
			}, {
				x,
				y
			}, out = new Point()) {
				return out.set(
					Math.sin(a * y) + c * Math.cos(a * x),
					Math.sin(b * x) + d * Math.cos(b * y)
				)
			}

			function resize(
				canvas,
				width = Math.floor(canvas.clientWidth * window.devicePixelRatio),
				height = Math.floor(canvas.clientHeight * window.devicePixelRatio),
			) {
				let resized = false
				if (canvas.width !== width) {
					canvas.width = width
					resized = true
				}
				if (canvas.height !== height) {
					canvas.height = height
					resized = true
				}
				return resized
			}

			function update(time) {
				const nextPosition = new Point()

				attractor.a = Interpolation.linear(Math.sin(time / 1000), 1.7, 1.5)
				attractor.b = Interpolation.linear(Math.cos(time / 1000), 1.5, 1.7)
				attractor.c = Interpolation.linear(Math.sin(time / 1000), 0.6, 0.7)
				attractor.d = Interpolation.linear(Math.cos(time / 1000), 1.2, 1.3)

				for (const position of positions) {
					updateAttractor(attractor, position, nextPosition)
					position.copy(nextPosition)
				}
			}

			let iteration = 0

			function render(time) {
				//cx.clearRect(0, 0, cx.canvas.width, cx.canvas.height)
				if (iteration % 25 === 0) {
					cx.globalCompositeOperation = 'source-over'
					cx.fillStyle = 'hsla(240, 100%, 2%, 0.3)'
					cx.fillRect(0, 0, cx.canvas.width, cx.canvas.height)
				}
				iteration++

				cx.globalCompositeOperation = 'screen'
				cx.fillStyle = 'hsla(220, 90%, 50%)'
				cx.save()
				cx.scale(window.devicePixelRatio, window.devicePixelRatio)
				cx.translate(cx.canvas.width / 2, cx.canvas.height / 2)

				for (const position of positions) {
					cx.fillRect(position.x * 256, position.y * 256, 1, 1)
				}

				cx.restore()
			}

			let frameId = null

			function onFrame(time) {
				resize(canvas)
				update(time)
				render(time)
				frameId = requestAnimationFrame(onFrame)
			}

			async function start() {
				frameId = requestAnimationFrame(onFrame)
			}

			start()
		</script>
	</body>

</html>
