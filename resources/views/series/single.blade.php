@extends('layouts.main')

@section($title = $serie->title ?? 'Consultée')
@section('content')
    @if ($serie != null)
        <h3>author_id : {{ $serie->author_id }}</h3>
        <p>{{ $serie->content }}</p>
        <span>{{ $serie->actors }}</span><br>
        <span>{{ $serie->year }}</span>
    @else
        <p>No available informations</p>
    @endif

@endsection
