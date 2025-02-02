@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">

			<div class="row">

				<div class="col-lg-8 entries">

                    @isset($posts)
                        @foreach ($posts as $post)

                            <article class="entry">

                                <div class="entry-img">
                                    <img alt="" class="img-fluid" src="{{ asset($post->image) }}">
                                </div>
        
                                <h2 class="entry-title">
                                    <a href="{{ route('posts.show', $post->id) }}">
                                        {{ $post->title ?? '' }}
                                    </a>
                                </h2>
        
                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time>
                                            </a>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a>
                                        </li>
                                    </ul>
                                </div>
        
                                <div class="entry-content">
                                    <p>
                                        {{ Str::limit($post->content, 200, ' ...' ) }}
                                    </p>
									<x-theme.anyar.button.read-more link="{{ route('posts.show', $post->id) }}" />
                                </div>
                            </article>

                        @endforeach    
                    @endisset

                    @isset($posts)
                        {{ $posts->links() }}
                    @endisset
				</div>

                {{-- SIDEBAR --}}
				<div class="col-lg-4">

					<div class="sidebar">

						<h3 class="sidebar-title">
							{{ __('Search') }}
						</h3>

						<x-theme.anyar.search-bar.posts />

						<x-theme.anyar.list.categories />

						<x-theme.anyar.widget.recent-posts />

						<h3 class="sidebar-title">Tags</h3>
						<div class="sidebar-item tags">
							<ul>
								<li><a href="#">App</a></li>
								<li><a href="#">IT</a></li>
								<li><a href="#">Business</a></li>
								<li><a href="#">Mac</a></li>
								<li><a href="#">Design</a></li>
								<li><a href="#">Office</a></li>
								<li><a href="#">Creative</a></li>
								<li><a href="#">Studio</a></li>
								<li><a href="#">Smart</a></li>
								<li><a href="#">Tips</a></li>
								<li><a href="#">Marketing</a></li>
							</ul>
						</div><!-- End sidebar tags-->

					</div><!-- End sidebar -->

				</div>

			</div>

		</div>
	</section>
@endsection