@php
    $blueBannerLinks = [
        [
            "text" => "Digital Comics",
            "imgSrc" => "comics-digital-comics.png"
        ],
        [
            "text" => "DC Merchandise",
            "imgSrc" => "comics-merchandise.png"
        ],
        [
            "text" => "Subscription",
            "imgSrc" => "comics-subscriptions.png"
        ],
        [
            "text" => "Comic Shop Locator",
            "imgSrc" => "comics-shop-locator.png"
        ],
        [
            "text" => "DC power Visa",
            "imgSrc" => "dc-power-visa.svg"
        ]
    ];
@endphp

@extends('layouts.app')

@section('page_title', "Comics")

@section('main_content')
    <main>
        {{-- Contenitore comics --}}
        <div class="bg-secondary">
            <div class="container">
                <div class="current-series-title">
                    <h3 class="text-uppercase fw-bold text-white m-0">Current series</h3>
                </div>
                <div class="row row-cols-6 gy-5">
                    {{-- Stampo le carte dei comics --}}
                    @foreach ($comics as $comic)                  
                        <a href="{{route('comics.details', $comic['id'])}}">
                            @include('partials.comic-card', $comic)
                        </a>
                    @endforeach
                </div>
                <div class="py-4 text-center">
                    <button type="button" class="btn btn-primary text-uppercase px-5 fw-bold">Load more</button>
                </div>
            </div>
        </div>
        {{-- Banner blu --}}
        <div class="blue-banner bg-primary">
            <div class="container">
                <div class="row py-5 align-items-center">
                    @foreach ($blueBannerLinks as $link)
                        <div class="col">
                            <a href="#" class="row align-items-center">
                                <img class="col-auto" src="{{asset('img/buy-' . $link['imgSrc'])}}" alt="`Immagine ` . {{ $link['text'] }}">
                                <span class="col text-white text-uppercase">{{ $link['text'] }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection