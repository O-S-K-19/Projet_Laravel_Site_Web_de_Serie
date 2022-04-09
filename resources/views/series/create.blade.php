
@extends('admin.main')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'une Série</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action=" {{ route('series.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                          <input class="input @error('title') is-danger @enderror" type="text" name="title" value="{{ old('title') }}" placeholder="Titre du serie">
                        </div>
                        @error('title')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Year</label>
                        <div class="control">
                          <input class="input" type="number" name="year" value="{{ old('year') }}" min="1950" max="{{ date('Y') }}">
                        </div>
                        @error('year')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Content</label>
                        <div class="control">
                            <textarea class="textarea" name="description" placeholder="Description de la serie">{{ old('content') }}</textarea>
                        </div>
                        @error('content')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <div class="control">
                          <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
