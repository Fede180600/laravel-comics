<div class="comics-box">
    <section class="comics-section">
        @foreach ($comics_array as $comic)
            @include('components.comic-card', $comic)
        @endforeach
    </section>
</div>