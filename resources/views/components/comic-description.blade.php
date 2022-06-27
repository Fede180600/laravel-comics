<section class="comic-section">
    <div class="blue-line">
        <div class="container">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
    </div>
    <div class="overview-box">
        <div class="container">
            <div class="col-left">
                <h2>{{ $comic['title'] }}</h2>
                <div class="price-box">
                    <div>
                        <p>U.S. Price: <span>{{ $comic['price'] }}</span></p>
                        <p>avalaible</p>
                    </div>
                    <div>
                        <select>
                            <option value=""><span>Check Availability</span></option>
                        </select>
                    </div>
                </div>
                <p class="description">
                    {{ $comic['description'] }}
                </p>
            </div>
            <div class="col-right">
                <h4>advertisement</h4>
                <img src="../images/adv.jpg" alt="">
            </div>
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