@extends('layouts.main')

@section($title = $serie->title ?? 'Consultée')
@section('content')

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Series</p>
        </header>
        <div class="card-content">

            @if ($serie != null)
                <div class="content">

                    <table class="table is-hoverable">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Titre</th>
                                <th>Acteur</th>
                                <th>Auteur</th>
                                <th>Content</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $serie->id }}</td>
                                <td><strong>{{ $serie->title }}</strong></td>
                                <td>{{ $serie->actors }}</td>
                                <td>{{ $serie->author->name }}</td>
                                <td>{{ $serie->content }}</td>
                                <td>{{ $serie->year }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @else
                <div>
                    <p>No available informations</p>
                </div>
            @endif
        </div>
    @endsection


