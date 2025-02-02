@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="Post" url="News / Post" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
                    {{ $post->title }}
                </h2>
				<p>
                    Publicado el 
                    {{ $post->created_at->format('d M, Y') }} por {{ $post->author->name ?? 'Autor desconocido' }}
                </p>
			</div>

			<div class="blog-details">
                
				<!-- Imagen del post si existe -->
				@if($post->image)
					<div class="blog-image">
						<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
					</div>
				@endif

				<!-- Contenido del post -->
				<div class="blog-content mt-4">
					<p>{!! nl2br(e($post->content)) !!}</p>
				</div>
			</div>

			<!-- Botón para regresar a la lista de posts -->
			<div class="mt-4 d-flex justify-content-center">
				<a href="{{ route('posts.index') }}" class="btn btn-primary btn-lg">
                    {{ __('Return main page') }}
                </a>
			</div>
		</div>
	</section>
@endsection
