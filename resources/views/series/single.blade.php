@extends('layouts.main')

@section($title = $serie->title ?? 'Consultée')
@section('content')
    @if ($serie != null)
        <h3>author : {{ $serie->author->name }}</h3>
        <p>{{ $serie->content }}</p>
        <h5>actors : {{ $serie->actors }}</h4><br>
        <h4>year : {{ $serie->year }}</h4>
    @else
        <p>No available informations</p>
    @endif

@endsection
