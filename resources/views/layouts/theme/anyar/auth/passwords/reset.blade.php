@extends('layouts.theme.anyar.auth')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Reset Password') }}</div>

					<div class="card-body">
						<form action="{{ route('password.update') }}" method="POST">
							@csrf

							<input name="token" type="hidden" value="{{ $token }}">

							<div class="row mb-3">
								<label class="col-md-4 col-form-label text-md-end" for="email">{{ __('Email Address') }}</label>

								<div class="col-md-6">
									<input autocomplete="email" autofocus class="form-control @error('email') is-invalid @enderror" id="email" name="email" required type="email" value="{{ $email ?? old('email') }}">

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
									<input autocomplete="new-password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required type="password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="row mb-3">
								<label class="col-md-4 col-form-label text-md-end" for="password-confirm">{{ __('Confirm Password') }}</label>

								<div class="col-md-6">
									<input autocomplete="new-password" class="form-control" id="password-confirm" name="password_confirmation" required type="password">
								</div>
							</div>

							<div class="row mb-0">
								<div class="col-md-6 offset-md-4">
									<button class="btn btn-primary" type="submit">
										{{ __('Reset Password') }}
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
