@extends('layouts.main')

@section($title = "Series")
@section('content')
    @if (count($series) > 0)
        @foreach ($series as $serie)
            <ul>
                <li><a href="/series/{{$serie->url}}">{{$serie->title }}</a></li>
            </ul>
        @endforeach

    @else
        <p>No series found</p>
    @endif

@endsection
