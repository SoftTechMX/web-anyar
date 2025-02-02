@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="Services" url="cPanel / Services / Index" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Services List') }}
				</h2>
				<p>
					{{ __('In this section you can edit, delete and create your services.') }}
				</p>
			</div>

			<x-theme.bootstrap5.table.index :collection="$services" />
			
		</div>
	</section>
@endsection
