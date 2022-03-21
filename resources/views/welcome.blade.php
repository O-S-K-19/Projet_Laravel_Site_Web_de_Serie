
@extends('layouts.main')

@section($title = "Home")

@section('content')
    @for($i = count($series)-1; $i > count($series)-4; $i--)
        <ul>
            <li>{{ $series[$i]->title }}</li>
        </ul>
    @endfor
@endsection
