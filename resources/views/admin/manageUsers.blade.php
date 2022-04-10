@extends('admin.main')

@section('content')
<div class="card">
    <header class="card-header">
        <h1 class="card-header-title">Users</h1>
    </header>
    <div class="card-content">
        <div class="content">
            @if(session()->has('info'))
                <div class="notification is-success">
                    {{ session('info') }}
                </div>
            @endif

            @if (count($users) > 0)
            <table class="table is-hoverable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Authoriser à commenter</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->authorize_to_comment == 1 ? 'oui' : 'non' }}</td>
                                <td><a class="button is-primary" href="#">Approuver</a></td>
                                <td><a class="button is-primary" href="{{ route('users.show', $user->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('users.edit', $user->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
                <p>No users found</p>
            @endif
        </div>
    </div>
</div>
@endsection
