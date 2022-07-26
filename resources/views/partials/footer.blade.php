@php
    $footerCategories = [
        [
            "title" => "DC Comics",
            "links" => [
                "Characters",
                "Comics",
                "Movies",
                "TV",
                "Games",
                "Videos",
                "News"
            ]
        ],
        [
            "title" => "Shop",
            "links" => [
                "Shop DC",
                "Shop DC Collectibles"
            ]
        ],
        [
            "title" => "DC",
            "links" => [
                "Terms Of Use",
                "Privacy policy (New)",
                "Ad Choices",
                "Advertising",
                "Jobs",
                "Subscriptions",
                "Talent Workshops",
                "CPSC Certificates",
                "Ratings",
                "Shop Help",
                "Contact Us"
            ]
        ],
        [
            "title" => "Sites",
            "links" => [
                "DC",
                "MAD Magazine",
                "DC Kids",
                "DC Universe",
                "DC Power Visa"
            ]
        ]
    ];

    $socialMediaLinks = [
        [
            "site" => "Facebook",
            "imgSrc" => "facebook"
        ],
        [
            "site" => "Twitter",
            "imgSrc" => "twitter"
        ],
        [
            "site" => "YouTube",
            "imgSrc" => "youtube"
        ],
        [
            "site" => "Periscope",
            "imgSrc" => "periscope"
        ],
        [
            "site" => "Pinterest",
            "imgSrc" => "pinterest"
        ]
    ];

@endphp

<footer>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row pt-5">
                    {{-- Prima colonna di link --}}
                    <div class="col-3">
                        <h5 class="mb-3">{{ $footerCategories[0]["title"] }}</h5>
                        <ul class="list-unstyled">
                            @foreach ($footerCategories[0]["links"] as $link)     
                                <li>
                                    <a href="#">
                                        {{ $link }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <h5 class="mb-3">{{ $footerCategories[1]["title"] }}</h5>
                        <ul class="list-unstyled">
                            @foreach ($footerCategories[1]["links"] as $link)     
                                <li>
                                    <a href="#">
                                        {{ $link }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- Seconda colonna di link --}}
                    <div class="col-3">
                        <h5 class="mb-3">{{ $footerCategories[2]["title"] }}</h5>
                        <ul class="list-unstyled">
                            @foreach ($footerCategories[2]["links"] as $link)     
                                <li>
                                    <a href="#">
                                        {{ $link }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- Terza colonna di link --}}
                    <div class="col-3">
                        <h5 class="mb-3">{{ $footerCategories[3]["title"] }}</h5>
                        <ul class="list-unstyled">
                            @foreach ($footerCategories[3]["links"] as $link)     
                                <li>
                                    <a href="#">
                                        {{ $link }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <p class="pb-3">All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights Reserved.<br><a href="#">Cookies Settings</a></p>
            </div>
            {{-- Logo DC laterale --}}
            <div class="col dc-bg">
            </div>
        </div>
    </div>
    {{-- Sign-up banner --}}
    <div class="sign-up-banner">   
        <div class="container">
            <div class="row py-4 justify-space-between">
                <div class="col">
                    <button type="button" class="btn btn-outline-primary text-uppercase">Sign-up Now!</button>
                </div>
                <div class="col">
                    <div class="row align-items-center">
                        <h4 class="col-auto text-primary fw-bold text-uppercase mb-0">Follow us</h4>
                        {{-- Stampo le icone dei social --}}
                        @foreach ($socialMediaLinks as $social)
                            <div class="col-auto text-center">
                                <img src="{{ asset('img/footer-' . $social['imgSrc'] . '.png') }}" alt="{{ $social["site"] }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>