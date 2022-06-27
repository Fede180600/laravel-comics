<section class="comic-section">
    <div class="blue-line">
        <div class="container">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
    </div>
    <div class="overview-box">
        <div class="container">
            <h2>{{ $comic['title'] }}</h2>
            <div class="price-box">
                {{ $comic['price'] }}
            </div>
            <p>
                {{ $comic['description'] }}
            </p>
        </div>
    </div>
    <div class="info-box">
        <div class="container">
            @foreach ($comic['artists'] as $name)
               Art by: {{ $name }},
            @endforeach
            @foreach ($comic['writers'] as $name)
                Written by: {{ $name }},
            @endforeach
            <br>
            {{ $comic['series'] }}
            <br>
            {{ $comic['price'] }}
            <br>
            {{ $comic['sale_date'] }}
        </div>
    </div>
</section>