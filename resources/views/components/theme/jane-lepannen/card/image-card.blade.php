<div class="card_jane_lepannen">
    <div class="card_jane_lepannen__image-container">
        <img alt="" class="card_jane_lepannen__image" src="{{ $image ?? 'https://images.unsplash.com/photo-1519999482648-25049ddd37b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2126&q=80' }}">
    </div>

    <svg class="card_jane_lepannen__svg" viewBox="0 0 800 500">

        <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" fill="#333" stroke="transparent" />
        <path class="card_jane_lepannen__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" fill="transparent" stroke-width="3" stroke="pink" />
    </svg>

    <div class="card_jane_lepannen__content">
        <h1 class="card_jane_lepannen__title">
            {{ $title ?? 'Title Card' }}
        </h1>
        <p>
            {{ $description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta dolor praesentium at quod autem omnis, amet eaque unde perspiciatis adipisci possimus quam facere illo et quisquam quia earum nesciunt porro.' }}
        </p>
    </div>

    <a href="{{ $url ?? '' }}" class="btn btn-primary card_jane_lepannen__button_link">
        See More
        <i class='bx bxs-right-arrow' ></i>
    </a>
</div>