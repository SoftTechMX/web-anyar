@extends('layouts.theme.anyar.auth')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Register') }}</div>

					<div class="card-body">
						<form action="{{ route('register') }}" method="POST">
							@csrf

							<div class="row mb-3">
								<label class="col-md-4 col-form-label text-md-end" for="name">{{ __('Name') }}</label>

								<div class="col-md-6">
									<input autocomplete="name" autofocus class="form-control @error('name') is-invalid @enderror" id="name" name="name" required type="text" value="{{ old('name') }}">

									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="row mb-3">
								<label class="col-md-4 col-form-label text-md-end" for="email">{{ __('Email Address') }}</label>

								<div class="col-md-6">
									<input autocomplete="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required type="email" value="{{ old('email') }}">

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

							<div class="row">
								<div class="col-md-6 offset-md-4 d-flex flex-wrap justify-content-center">
									<a href="{{ route('home') }}" class="btn btn-secondary m-1 col-12 col-lg-5">
										<i class='bx bxs-left-arrow'></i>
										{{ __('Return') }}
									</a>
									<button class="btn btn-primary m-1 col-12 col-lg-5" type="submit">
										{{ __('Register') }}
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
