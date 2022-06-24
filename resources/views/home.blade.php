@extends('layouts.app')

@section('title')
    DC comics | HOMEPAGE
@endsection

@section('main_content')
    <h2>Comics</h2>

    @include('components.comics-section', $comics_array)
    
@endsection