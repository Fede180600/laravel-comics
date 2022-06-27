<div class="comics-box">
    <section class="comics-section">
        @foreach ($comics_array as $comic)
            @include('components.comic-card', [
                'id' => $comic['id'],
                'title' => $comic['title'],
                'description' => $comic['description'],
                'thumb' => $comic['thumb'],
                'price' => $comic['price'],
                'series' => $comic['series']
            ])
        @endforeach
    </section>
</div>