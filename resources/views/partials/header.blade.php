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
    {{-- Piccola barra blu in cima al sito --}}
    <div class="bg-primary">
        <div class="container">
            <ul class="top-nav mb-0 text-uppercase">
                <li class="px-5">
                    <a href="#">DC Power&trade; VISA&reg;</a>
                </li>
                <li class="dropdown">
                    <a href="#">Additional DC Sites <i class="fa-solid fa-caret-down"></i></a>
                </li>
            </ul>
        </div>
    </div>
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
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 text-uppercase">
                    {{-- Stampo la lista dei link --}}
                    @foreach ($navLinks as $link)
                        <li class="nav-item">
                            <a class="nav-link px-3" class="{{ $link === `Comics` ? `active` : ` ` }}" aria-current="page" href="#">{{ $link }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>
    </nav>
    {{-- Jumbotron --}}
    <div class="jumbotron"></div>
</header>