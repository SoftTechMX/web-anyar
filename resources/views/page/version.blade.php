@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="System Details" url="System / Info" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('System Details') }}
				</h2>
				<p>
                    {{ __('In this section you can find information about the system version and general configurations') }}
				</p>
			</div>
        </div>
    </section>
@endsection