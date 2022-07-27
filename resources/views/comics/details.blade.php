@extends('layouts.app')

@section('page_title', "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")

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
                            <h2 class="comic-title fw-bold text-uppercase mb-3">{{ $comic["title"] }}</h2>
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
        {{-- Banner blu --}}
        
    </main>
@endsection