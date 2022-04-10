@extends('admin.main')

@section('content')
<div class="card">
    <header class="card-header">
        <h1 class="card-header-title">Comments</h1>
    </header>
    <div class="card-content">
        <div class="content">
            @if(session()->has('info'))
                <div class="notification is-success">
                    {{ session('info') }}
                </div>
            @endif

            @if (count($comments) > 0)
            <table class="table is-hoverable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Utilisateur</th>
                        <th>Serie</th>
                        <th>Contenu</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td>{{ App\Models\User::where('id',  $comment->user_id)->first()->name; }}</td>
                                <td>{{ App\Models\Serie::where('id',  $comment->serie_id)->first()->title; }}</td>
                                <td>{{ $comment->content }}</td>
                                <td>{{ $comment->date }}</td>
                                <td><a class="button is-primary" href="#">Valider</a></td>
                                <td><a class="button is-warning" href="{{ route('comments.edit', $comment->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
            @else
                <p>No Comments found</p>
            @endif
        </div>
    </div>
</div>
@endsection
