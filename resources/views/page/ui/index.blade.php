@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="App Settings" url="cPanel / App Settings / Index" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('App Settings') }}
				</h2>
				<p>
					
				</p>
			</div>
            
            <form action="{{ route('app-settings.save') }}" method="POST">
                @csrf
                @method('POST')
        
                <div class="row">
                    <div class="mb-3 col-12 col-lg-3">
                        <label for="name" class="form-label">
                            {{ __('App Name') }}
                        </label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $settings->name) }}">
                    </div>
                    <div class="mb-3 col-12 col-lg-3">
                        <label for="descripcion" class="form-label">
                            {{ __('App Description') }}
                        </label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $settings->descripcion) }}">
                    </div>
                    <div class="mb-3 col-12 col-lg-3">
                        <label for="email" class="form-label">
                            {{ __('Contact Email') }}
                        </label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $settings->email) }}">
                    </div>
                    <div class="mb-3 col-12 col-lg-3">
                        <label for="phone" class="form-label">
                            {{ __('Contact Phone') }}
                        </label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $settings->phone) }}">
                    </div>
                    <div class="mb-3 col-12">
                        <label for="about_us" class="form-label">
                            {{ __('About Us') }}
                        </label>
                        <input type="text" class="form-control" id="about_us" name="about_us" value="{{ old('about_us', $settings->about_us) }}">
                    </div>
                    <div class="mb-3">
                        <label for="Mission" class="form-label">
                            {{ __('Mission') }}
                        </label>
                        <input type="text" class="form-control" id="mision" name="mision" value="{{ old('mision', $settings->mision) }}">
                    </div>
            
                    <div class="mb-3">
                        <label for="Vision" class="form-label">
                            {{ __('Vision') }}
                        </label>
                        <input type="text" class="form-control" id="vision" name="vision" value="{{ old('vision', $settings->vision) }}">
                    </div>
                </div>

        
                <div class="mb-3">
                    <label for="country" class="form-label">
                        {{ __('Country') }}
                    </label>
                    <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $settings->country) }}">
                </div>
        
                <div class="mb-3">
                    <label for="address_street" class="form-label">
                        {{ __('Street') }}
                    </label>
                    <input type="text" class="form-control" id="address_street" name="address_street" value="{{ old('address_street', $settings->address_street) }}">
                </div>
        
                <div class="mb-3">
                    <label for="address_cp" class="form-label">
                        {{ __('Zip Code') }}
                    </label>
                    <input type="text" class="form-control" id="address_cp" name="address_cp" value="{{ old('address_cp', $settings->address_cp) }}">
                </div>
        
                <div class="mb-3">
                    <label for="address_number" class="form-label">
                        {{ __('Number') }}
                    </label>
                    <input type="text" class="form-control" id="address_number" name="address_number" value="{{ old('address_number', $settings->address_number) }}">
                </div>
        
                <div class="mb-3">
                    <label for="facebook" class="form-label">
                        {{ __('Facebook') }}
                    </label>
                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $settings->facebook) }}">
                </div>
        
                <div class="mb-3">
                    <label for="twitter" class="form-label">
                        {{ __('Twitter') }}
                    </label>
                    <input type="text" class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $settings->twitter) }}">
                </div>
        
                <div class="mb-3">
                    <label for="instagram" class="form-label">
                        {{ __('Instagram') }}
                    </label>
                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $settings->instagram) }}">
                </div>
        
                <div class="mb-3">
                    <label for="skype" class="form-label">
                        {{ __('Skype') }}
                    </label>
                    <input type="text" class="form-control" id="skype" name="skype" value="{{ old('skype', $settings->skype) }}">
                </div>
        
                <div class="mb-3">
                    <label for="linkedin" class="form-label">
                        {{ __('LinkedIn') }}
                    </label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin', $settings->linkedin) }}">
                </div>
        
                <div class="mb-3">
                    <label for="youtube" class="form-label">
                        {{ __('YouTube') }}
                    </label>
                    <input type="text" class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $settings->youtube) }}">
                </div>
        
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary col-6 col-xm-12 col-sm-12 col-md-6">
                        {{ __('Save Changes') }}
                    </button>
                </div>
            </form>
			
		</div>
	</section>
@endsection
