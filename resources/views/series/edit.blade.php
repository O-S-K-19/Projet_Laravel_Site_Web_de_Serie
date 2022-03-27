@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un serie</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('series.update', $serie->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">Titre</label>
                        <div class="control">
                          <input class="input @error('title') is-danger @enderror" type="text" name="title" value="{{ old('title', $serie->title) }}" placeholder="Titre du serie">
                        </div>
                        @error('title')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Année de diffusion</label>
                        <div class="control">
                          <input class="input" type="number" name="year" value="{{ old('year', $serie->year) }}" min="1950" max="{{ date('Y') }}">
                        </div>
                        @error('year')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description" placeholder="Description du serie">{{ old('description', $serie->description) }}</textarea>
                        </div>
                        @error('description')
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
