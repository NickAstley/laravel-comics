@php
// Lista link
    $navLinks = [
        "Characters",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Collectibles",
        "Videos",
        "Fans",
        "News",
        "Shop"
    ]
@endphp

<header>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            {{-- Logo --}}
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/dc-logo.png') }}" alt="Logo DC">
            </a>
            {{-- Hamburger menu --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    {{-- Stampo la lista dei link --}}
                    @foreach ($navLinks as $link)
                        <li class="nav-item text-uppercase">
                            <a class="nav-link px-3" class="{{ $link === `Comics` ? `active` : ` ` }}" aria-current="page" href="#">{{ $link }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    {{-- Jumbotron --}}
    <div class="jumbotron"></div>
</header>