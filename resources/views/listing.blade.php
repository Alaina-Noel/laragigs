@extends('layout')

@section('content')
    @include('partials._search')


    <h2> id - {{$listing['id']}}</h2>
<h3>title - {{ $listing['title'] }}</h3>
<h3>description - {{ $listing['description'] }}</h3>

@endsection
