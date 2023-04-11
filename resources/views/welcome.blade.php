@extends('layout.app')

@section('contents')

    <div class="section-jumbotron">
        <img src="/img/jumbotron.jpg" alt="">
    </div>
    <div class="section-content">
        <div class="container">
            <div class="target style-target-button">
                <h3>
                    Current Series
                </h3>
            </div>
            <ul class="card-list">
                @foreach($cardsArray as $card)
                    <li class="card">
                        <figure>
                            <img :src="$card['thumb']" alt="">
                        </figure>
                        <div class="text-card">
                            {{ $card['series'] }}
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="button style-target-button">
                Load More
            </div>
        </div>
    </div>
    <div class="section-content-buy">
        <div class="container">
            <ul class="list-buy">
                @foreach($listBuy as $iconBuy)
                <li class="list-item-buy">
                    <img :src="vite::asset($iconBuy['image'])" alt="">
                    {{ $iconBuy['text'] }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection   

@section('footer')

@include('partials.footer')

@endsection