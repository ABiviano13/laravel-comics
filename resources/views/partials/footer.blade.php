<footer>
    <div class="section-link">
    <div class="container">
        <div class="link">
            @foreach($links as $objectLink)
                <ul>
                    <h3 class="title">
                        {{ $objectLink['title'] }}
                    </h3>
                    @foreach($objectLink['link'] as $link)
                        <li class="text">
                            {{ $link }}
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
        <div class="logo">
            <img src="/img/dc-logo-bg.png" alt="logo-big">
        </div>
    </div>
</div>
<div class="section-sign-up">
    <div class="container">
        <div class="row">
            <div class="col-button">
                Sign-up Now!
            </div>
            <div class="col-icon">
                <div class="text">
                    Follow us
                </div>
                <ul class="icon-list">
                    @foreach($icons as $icon)
                        <li>
                            <img src="{{ Vite::asset($icon)}}" alt="icon">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
</footer>
