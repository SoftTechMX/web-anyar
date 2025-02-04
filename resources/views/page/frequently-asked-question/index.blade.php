@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="F.A.Q's" url="cPanel / F.A.Q's / Index" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __("Frequently Asked Questions") }}
				</h2>
				<p>
					{{ __('') }}
				</p>
			</div>

			<x-theme.bootstrap5.table.index :collection="$faqs" />
			
		</div>
	</section>
@endsection
