@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="Contact Request" url="cPanel / Contact Request / Index" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Contact Requests') }}
				</h2>
				<p>
					{{ __('In this section you can see the contact requests that users make in the contact form, use this section to know what users need') }}
				</p>
			</div>

			<x-theme.bootstrap5.table.index :collection="$contact_requests" />
			
		</div>
	</section>
@endsection
