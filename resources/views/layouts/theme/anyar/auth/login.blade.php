@extends('layouts.theme.anyar.auth')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Login') }}</div>

					<div class="card-body">
						<form action="{{ route('login') }}" method="POST">
							@csrf

							<div class="row mb-3">
								<label class="col-md-4 col-form-label text-md-end" for="email">{{ __('Email Address') }}</label>

								<div class="col-md-6">
									<input autocomplete="email" autofocus class="form-control @error('email') is-invalid @enderror" id="email" name="email" required type="email" value="{{ old('email') }}">

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="row mb-3">
								<label class="col-md-4 col-form-label text-md-end" for="password">{{ __('Password') }}</label>

								<div class="col-md-6">
									<input autocomplete="current-password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required type="password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-md-6 offset-md-4">
									<div class="form-check">
										<input {{ old('remember') ? 'checked' : '' }} class="form-check-input" id="remember" name="remember" type="checkbox">

										<label class="form-check-label" for="remember">
											{{ __('Remember Me') }}
										</label>
									</div>
								</div>
							</div>

							<div class="row mb-0">
								<div class="col-md-8 offset-md-4">
									<button class="btn btn-primary" type="submit">
										{{ __('Login') }}
									</button>

									@if (Route::has('password.request'))
										<a class="btn btn-link" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
										</a>
									@endif
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
