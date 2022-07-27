@php
    $grayBannerLinks = [
        [
            "text" => "Digital Comics",
            "imgSrc" => "comics-digital-comics.png"
        ],
        [
            "text" => "Shop DC",
            "imgSrc" => "comics-merchandise.png"
        ],
        [
            "text" => "Comic Shop Locator",
            "imgSrc" => "comics-subscriptions.png"
        ],
        [
            "text" => "Subscriptions",
            "imgSrc" => "comics-shop-locator.png"
        ]
    ];
@endphp

@extends('layouts.app')

@section('page_title', $comic["title"] . " - Dettagli")

@section('main_content')
    <main>
        <div class="blue-div"></div>
        <div class="container">
            <div class="my-smaller-container">
                {{-- Copertina fumetto --}}
                <div class="current-comic-cover-container">
                    <div class="current-comic-cover text-uppercase">
                        <img src="{{ $comic["thumb"] }}" alt="">
                        <div class="floating-label category-label">{{ $comic["type"] }}</div>
                        <div class="floating-label gallery-label">View gallery</div>
                    </div>
                </div>
                {{-- Dettagli fumetto --}}
                <div class="py-5">
                    <div class="row">
                        <div class="col">
                            {{-- Titolo --}}
                            <h2 class="fw-bold text-uppercase mb-3">{{ $comic["title"] }}</h2>
                            {{-- Prezzo e disponibilità --}}
                            <div class="price-availability d-flex py-2 mb-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between">
                                        <div class="px-3">
                                            <span class="transparent-text">U.S. Price:</span>
                                            <span>{{ $comic["price"] }}</span>
                                        </div>
                                        <div class="px-3">
                                            <span class="transparent-text text-uppercase">Available</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <span>Check Availability</span>
                                    <i class="fa-solid fa-caret-down"></i>
                                </div>
                            </div>
                            {{-- Descrizione --}}
                            <p>{{ $comic["description"] }}</p>
                        </div>
                        <div class="col-5">
                            <div class="text-end">
                                <h5 class="text-uppercase">Advertisement</h5>
                                <img src="{{ asset('img/adv.jpg') }}" alt="Apply for heroic rewards">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        <div class="bg-light-gray py-5">
            <div class="container">
                <div class="my-smaller-container">
                    <div class="row pb-5">
                        {{-- Colonna sinistra --}}
                        <div class="col">
                            <h3 class="py-3 border-bottom fw-bold">Talent</h3>
                            {{-- Disegnatori --}}
                            <div class="row border-bottom py-1">
                                <div class="col-4">
                                    <h6>Art by:</h6>
                                </div>
                                <div class="col">
                                    @foreach ($comic["artists"] as $i => $artist)
                                        <a href="#">{{ $artist }}</a>
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            {{-- Scrittori --}}
                            <div class="row border-bottom py-1">
                                <div class="col-4">
                                    <h6>Written by:</h6>
                                </div>
                                <div class="col">
                                    @foreach ($comic["writers"] as $i => $writer)
                                        <a href="#">{{ $writer }}</a>
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- Colonna destra --}}
                        <div class="col">
                            <h3 class="py-3 border-bottom fw-bold">Specs</h3>
                            {{-- Serie --}}
                            <div class="row border-bottom py-1">
                                <div class="col-4">
                                    <h6>Series:</h6>
                                </div>
                                <div class="col">
                                    <a href="#" class="text-uppercase">{{ $comic["series"] }}</a>
                                </div>
                            </div>
                            {{-- U.S. Price --}}
                            <div class="row border-bottom py-1">
                                <div class="col-4">
                                    <h6>U.S. Price:</h6>
                                </div>
                                <div class="col">
                                    <span>{{ $comic["price"] }}</span>
                                </div>
                            </div>
                            {{-- On Sale Date --}}
                            <div class="row border-bottom py-1">
                                <div class="col-4">
                                    <h6>On Sale Date:</h6>
                                </div>
                                <div class="col">
                                    <span>{{ date('M d Y', strtotime($comic["sale_date"])) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light-gray">
            <div class="container">
                <div class="my-smaller-container">
                    {{-- Banner --}}
                    <div class="gray-banner row align-items-center">
                        @foreach ($grayBannerLinks as $link)
                            <div class="col">
                                <a href="#" class="row py-3">
                                    <span class="col text-uppercase fw-bold">{{ $link['text'] }}</span>
                                    <img class="col-3" src="{{ asset('img/dc-logo.png') }}" alt="`Immagine ` . {{ $link['text'] }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>   
    </main>
@endsection