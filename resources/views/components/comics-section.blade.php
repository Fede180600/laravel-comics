<div>
    @foreach ($comics_array as $comic)
        @include('components.comic-card', $comic)
    @endforeach
</div>