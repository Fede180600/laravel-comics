<div class="comic-card">
    <div class="comic-img">
        <img src="{{ $thumb }}" alt="">
    </div>
    <h5>
        <a href="{{ route('single-comic', ['id' => $id]) }}">
        {{ $series }}
        </a>
    </h5>
</div>