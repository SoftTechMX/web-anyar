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
                                    <div class="read-more">
                                        <a href="{{ route('posts.show', $post->id) }}">
                                            {{ __('Read More') }}
                                        </a>
                                    </div>
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

						<h3 class="sidebar-title">Search</h3>
						<div class="sidebar-item search-form">
							<form action="">
								<input type="text">
								<button type="submit"><i class="bi bi-search"></i></button>
							</form>
						</div><!-- End sidebar search formn-->

						<h3 class="sidebar-title">Categories</h3>
						<div class="sidebar-item categories">
							<ul>
								<li><a href="#">General <span>(25)</span></a></li>
								<li><a href="#">Lifestyle <span>(12)</span></a></li>
								<li><a href="#">Travel <span>(5)</span></a></li>
								<li><a href="#">Design <span>(22)</span></a></li>
								<li><a href="#">Creative <span>(8)</span></a></li>
								<li><a href="#">Educaion <span>(14)</span></a></li>
							</ul>
						</div><!-- End sidebar categories-->

						<h3 class="sidebar-title">Recent Posts</h3>
						<div class="sidebar-item recent-posts">
							<div class="post-item clearfix">
								<img alt="" src="assets/img/blog/blog-recent-1.jpg">
								<h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>

							<div class="post-item clearfix">
								<img alt="" src="assets/img/blog/blog-recent-2.jpg">
								<h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>

							<div class="post-item clearfix">
								<img alt="" src="assets/img/blog/blog-recent-3.jpg">
								<h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a>
								</h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>

							<div class="post-item clearfix">
								<img alt="" src="assets/img/blog/blog-recent-4.jpg">
								<h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>

							<div class="post-item clearfix">
								<img alt="" src="assets/img/blog/blog-recent-5.jpg">
								<h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>

						</div><!-- End sidebar recent posts-->

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