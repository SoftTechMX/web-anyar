@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">

			<div class="row">

				<div class="col-lg-8 entries">

					<article class="entry entry-single">

						<div class="entry-img">
							<img alt="" class="img-fluid" src="assets/img/blog/blog-1.jpg">
						</div>

						<h2 class="entry-title">
							<a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
						</h2>

						<div class="entry-meta">
							<ul>
								<li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
								<li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
								<li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
							</ul>
						</div>

						<div class="entry-content">
							<p>
								Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
								Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
							</p>

							<p>
								Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
							</p>

							<blockquote>
								<p>
									Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
								</p>
							</blockquote>

							<p>
								Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
								Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
								Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
							</p>

							<h3>Et quae iure vel ut odit alias.</h3>
							<p>
								Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
								Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
								Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
							</p>
							<img alt="" class="img-fluid" src="assets/img/blog/blog-inside-post.jpg">

							<h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
							<p>
								Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
								Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
							</p>
							<p>
								Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
							</p>

						</div>

						<div class="entry-footer">
							<i class="bi bi-folder"></i>
							<ul class="cats">
								<li><a href="#">Business</a></li>
							</ul>

							<i class="bi bi-tags"></i>
							<ul class="tags">
								<li><a href="#">Creative</a></li>
								<li><a href="#">Tips</a></li>
								<li><a href="#">Marketing</a></li>
							</ul>
						</div>

					</article>

					<x-theme.anyar.post-author />

                    <x-theme.anyar.post-comments />

				</div>

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
								<h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
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
