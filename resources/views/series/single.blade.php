@extends('layouts.main')

@section($title = $serie->title ?? 'Consultée')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Titre : {{ $serie->title }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Année de sortie : {{ $serie->year }}</p>
                <hr>
                <p>{{ $serie->content }}</p>
            </div>
        </div>
    </div>
@endsection

