@extends('layouts.main')

@section('content')
    @foreach ($series as $serie)
        <ul>
            <li>
                {{ $serie->title }}
            </li>
        </ul>
    @endforeach
@endsection
