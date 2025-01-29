<div class="member d-flex align-items-start">
    <div class="col-2 pic">
        <img alt="" class="img-fluid" src="{{ asset('/storage/img/team/team-1.jpg') }}" />
    </div>
    <div class="member-info">
        <h4>{{ $person->getFullName() ?? 'John Doe' }}</h4>
        <span></span>
        <p>
            {{ $person->bio }}
        </p>
        <div class="social">
            <a href="" class="twitter-link">
                <i class='bx bxl-twitter' ></i>
            </a>
            <a href="" class="facebook-link">
                <i class='bx bxl-facebook'></i>
            </a>
            <a href="" class="instagram-link">
                <i class='bx bxl-instagram'></i>
            </a>
            <a href="" class="linkedin-link">
                <i class='bx bxl-linkedin' ></i>
            </a>
            <a href="" class="telegram-link">
                <i class='bx bxl-telegram'></i>
            </a>
            <a href="" class="youtube-link">
                <i class='bx bxl-youtube'></i>
            </a>
        </div>
    </div>
</div>