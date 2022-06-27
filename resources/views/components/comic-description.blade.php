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

            <div class="col-left">
                <h3>Talent</h3>
                <div>
                    <span>Art by:</span> 
                    @foreach ($comic['artists'] as $name)
                        {{ $name }},
                    @endforeach
                </div>

                <div>
                    <span>Written by:</span>
                    @foreach ($comic['writers'] as $name)
                        {{ $name }},
                    @endforeach
                </div>
            </div>

            <div class="col-right">
                <h3>Specs</h3>
                <div style="text-transform: uppercase; color: #21a9dd; font-weight: 600;">
                    <p style="color: #00375f; text-transform: capitalize;">Series:</p>
                    {{ $comic['series'] }}
                </div>
                

                <div>
                    <p>U.S. Price:</p>
                    {{ $comic['price'] }}
                </div>
                

                
                <div>
                    <p>On Sale Date</p>
                    {{ $comic['sale_date'] }}
                </div>
            </div>
        </div>
    </div>
</section>