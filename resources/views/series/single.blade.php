@extends('layouts/main')
@section('title')
Serie consultée
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
                        <th>id</th>
                        <th>Titre</th>
                        <th>Acteur</th>
                        <th>Auteur</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $serie->id }}</td>
                            <td><strong>{{ $serie->title }}</strong></td>
                            <td>{{ $serie->acteurs }}</td>
                            <td>{{ $serie->author->name }}</td>
                            <td>{{ $serie->content }}</td>


                        </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
