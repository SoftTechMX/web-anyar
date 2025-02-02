<h3 class="sidebar-title">
    {{ __('Recent Posts') }}
</h3>

<div class="sidebar-item recent-posts">

    @isset($posts)
        @foreach ($posts as $post)
            <div class="post-item clearfix">
                <img alt="" src="{{ asset($post->image) }}">
                <h4>
                    <a href="{{ route('posts.show', $post->id) }}">
                        {{ $post->title ?? '' }}
                    </a>
                </h4>
                <time datetime="2020-01-01">
                    {{ $post->created_at->format('M d, Y') }}
                </time>
            </div>            
        @endforeach
    @endisset

</div>