@extends('layouts.app')

@section('title')
    DC comics | HOMEPAGE
@endsection

@section('main_content')

    @include('components.jumbotron')

    @include('components.comics-section', $comics_array)

    @include('components.blue-line')
    
@endsection