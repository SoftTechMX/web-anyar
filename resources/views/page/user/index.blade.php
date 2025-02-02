@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="Users" url="cPanel / Users / Index" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __("User's Lits") }}
				</h2>
				<p>
					{{ __('') }}
				</p>
			</div>

			<x-theme.bootstrap5.table.index :collection="$users" />
			
		</div>
	</section>
@endsection
