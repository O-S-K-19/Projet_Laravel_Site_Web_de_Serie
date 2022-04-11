
    @extends('layouts.main')

    @section($title = "Files Upload")
@section('content')
<div class="card">
    <header class="card-header">
        <h1 class="card-header-title">Upload files</h1>
    </header>
    <div class="card-content">
        <div class="content">
            @if(session()->has('info'))
                <div class="notification is-success">
                    {{ session('info') }}
                </div>
            @endif

            <a class="button is-info" href="{{ route('upload.create') }}">Ajouter des fichiers</a>

            @if (count($files) > 0)
            <table class="table is-hoverable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User_id</th>
                        <th>Nom du fichier</th>
                        <th>Chemin</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($files as $file)
                            <tr>
                                <td>{{ $file->id }}</td>
                                <td>{{ $file->user_id }}</td>
                                <td><strong>{{ $file->fileName }}</strong></td>
                                <td><a class="button is-primary" href="#">Telecharger</a></td>
                                <td><a class="button is-warning" href="{{ route('upload.edit', $file->filePath) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('upload.destroy', $file->filePath) }}" method="post">
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
                <p>No files found</p>
            @endif
        </div>
    </div>
</div>
@endsection
