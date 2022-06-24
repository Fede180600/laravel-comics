@extends('layouts.app')

@section('title')
    DC comics | HOMEPAGE
@endsection

@section('main_content')
    <h2>Comics</h2>

    <div>
        @foreach ($comics_array as $comic)
            <div class="comic-card">
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>
        @endforeach
    </div>
@endsection