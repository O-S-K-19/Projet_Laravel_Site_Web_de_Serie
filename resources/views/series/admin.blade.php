@extends('layouts/main')

@section('title')
Series
@endsection


@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Series</p>
    </header>
    <div class="card-content">
        <div class="content">
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
                    @foreach($series as $serie)
                        <tr>
                            <td>{{ $serie->id }}</td>
                            <td><strong>{{ $serie->title }}</strong></td>
                            <td><a class="button is-primary" href={{ route('series.show', $serie->url) }}>Voir</a></td>
                            <td><a class="button is-warning" href="{{ route('series.edit', $serie->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
