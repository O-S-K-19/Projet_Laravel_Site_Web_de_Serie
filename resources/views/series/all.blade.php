@extends('layouts.main')

@section($title = "Series")
@section('content')
    @foreach ($series as $serie)
        <ul>
            <li>{{ $serie->title }}</li>
        </ul>
    @endforeach
@endsection
