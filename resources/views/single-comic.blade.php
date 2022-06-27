@extends('layouts.app')

@section('title')
    DC Comics | single product
@endsection

@section('main_content')

    @include('components.jumbotron')

    @include('components.comic-description', $comics_array)
@endsection