<div>
    <div class="comic-container text-white">
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