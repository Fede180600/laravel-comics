@extends('layouts.app')

@section('title')
    DC Comics | Comics
@endsection

@section('main_content')

    @include('components.jumbotron')

    @include('components.comics-section', $comics_array)

    @include('components.blue-line')

@endsection