@extends('layouts/main')


@section('title')
Dashboard
@endsection

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">series</p>
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
                    @for($i = count($series)-1; $i > count($series)-4; $i--)
                        <tr>
                            <td>{{ $series[$i]->id }}</td>
                            <td><strong>{{ $series[$i]-> title }}</strong></td>
                            <td><a class="button is-primary" href={{ route('series.show', $series[$i]->url) }}>Voir</a></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
