@extends('admin.main')

@section('content')
<div class="card">
    <header class="card-header">
        <h1 class="card-header-title">contacts</h1>
    </header>
    <div class="card-content">
        <div class="content">
            @if(session()->has('info'))
                <div class="notification is-success">
                    {{ session('info') }}
                </div>
            @endif

            @if (count($contacts) > 0)
            <table class="table is-hoverable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>{{ $contact->date }}</td>
                                <td><a class="button is-primary" href="#">Repondre</a></td>
                                <td>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
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
                <p>No contacts found</p>
            @endif
        </div>
    </div>
</div>
@endsection
