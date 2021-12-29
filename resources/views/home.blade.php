@extends('layout')

@section('content')
    @include('elements.banner')

    @include('elements.two_block')

    @include('elements.background_text')

    @include('elements.featured_blog', ['data' => $data->blogHightLight])

    @include('elements.introduce')
@endsection
