@extends('layouts.theme.anyar.app')

@section('breadcrumb')
    <x-theme.anyar.breadcrumb titulo="Search Results" url="News / Search Results" />
@endsection

@section('content')
    <section class="blog" id="blog">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>
                    {{ __('Search Results')}}
                </h2>
                <p>
                    {{ __('Showing results for') }} "{{ $term }}"
                </p>
            </div>

            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <article class="entry">
                            @if ($post->image)
                                <div class="entry-img">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                                </div>
                            @endif

                            <h2 class="entry-title">
                                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                            </h2>
                            <div class="entry-content">
                                <p>
                                    {{ Str::limit(strip_tags($post->content), 100) }}
                                </p>
                                
                                <x-theme.anyar.button.read-more link="{{ route('posts.show', $post->id) }}" />

                            </div>
                        </article>
                    </div>
                @empty
                    <p>
                        {{ __('No results found for') }} "{{ $term }}"
                    </p>
                @endforelse
            </div>

            <div class="d-flex justify-content-center">
                <x-theme.anyar.button.go-back />
            </div>
        </div>
    </section>
@endsection
