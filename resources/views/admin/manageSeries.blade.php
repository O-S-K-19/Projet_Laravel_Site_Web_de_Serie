@extends('admin.main')

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">series</p>
    </header>
    <div class="card-content">
        <div class="content">
            @if(session()->has('info'))
                <div class="notification is-success">
                    {{ session('info') }}
                </div>
            @endif
            @if (Route::prefix('/admin'))
            <a class="button is-info" href="{{ route('series.create') }}">Créer une série</a>
            @endif
            @if (count($series) > 0)
            <table class="table is-hoverable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (!Route::prefix('/admin'))
                    @foreach($series as $serie)
                            <tr>
                                <td>{{ $serie->id }}</td>
                                <td><strong><a href="/series/{{$serie->url}}">{{$serie->title }}</a></strong></td>
                            </tr>
                        @endforeach
                    @else
                        @foreach($series as $serie)
                            <tr>
                                <td>{{ $serie->id }}</td>
                                <td><strong>{{ $serie->title }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('singleSeriePage', $serie->url) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('series.edit', $serie->url) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('series.destroy', $serie->url) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            @else
                <p>No series found</p>
            @endif
        </div>
    </div>
</div>
@endsection
