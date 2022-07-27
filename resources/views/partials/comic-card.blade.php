<div class="h-100">
    <div class="comic-container text-white h-100">
        <div class="comic-img-container mb-3">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
        </div>
        <span class="text-uppercase">{{ $comic['series'] }}</span>
        <div class="hover-info p-3">
            <div>
                Price: {{ $comic['price'] }}
            </div>
            <div>
                Category: {{ $comic['type'] }}
            </div>
        </div>
    </div>
</div>