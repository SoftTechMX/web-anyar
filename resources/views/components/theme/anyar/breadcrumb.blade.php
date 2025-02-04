<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            @foreach ($url_exploded as $part)
                <li>
                    <a href="#">
                        {{ $part }}
                    </a>
                </li>
            @endforeach
        </ol>
        <h2>{{ $titulo ?? '' }}</h2>
    </div>
</section>