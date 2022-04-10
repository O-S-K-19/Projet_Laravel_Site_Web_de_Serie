@extends('admin.main')

@section('content')
<br>
<div class="container">
<div class="row card text-white bg-dark">
    <h4 class="card-header">Modification d'une série</h4>
    <div class="card-body">
        <form action="{{ route('series.update', $serie->id ) }}" method="post">
            @csrf
            @method('PATCH')


            <div style="font-size; 50px; display:block">
                <button type="submit" class="btn btn-secondary">Enregistrer</button>
                </div>
            <div style="display:inline-block">


                <div class="form-group">
                    <label class="label">user_id</label>
                    <input type="number" min="1" class="form-control  @error('user_id') is-invalid @enderror" name="user_id" id="user_id" placeholder="Votre identifiant sur le site" value="{{ old('user_id', $serie->user_id) }}">
                    @error('user_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">Producteur-Realisateur</label>
                    <input type="text" class="form-control  @error('serie_maker') is-invalid @enderror" name="serie_maker" id="serie_maker" placeholder="Nom du Producteurs" value="{{ old('serie_maker', $serie->serie_maker) }}">
                    @error('serie_maker')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">Titre</label>
                    <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title" id="title" placeholder="Titre de la serie" value="{{ old('title', $serie->title) }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">L'url pour l'image de couverture</label>
                    <input type="text" class="form-control  @error('image') is-invalid @enderror" name="image" id="image" placeholder="image de couverture" value="{{ old('image', $serie->image) }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">L'url Bande Annonce</label>
                    <input type="text" class="form-control  @error('movie') is-invalid @enderror" name="movie" id="movie" placeholder=" Video Bande Annonce" value="{{ old('movie', $serie->movie) }}">
                    @error('movie')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


            </div>

            <div style="font-size; 50px; display:inline-block">

                <div class="form-group">
                    <label class="label">Description</label>
                    <textarea class="form-control  @error('content') is-invalid @enderror" name="content" id="content" placeholder="Description de serie">{{ old('content', $serie->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">Acteurs</label>
                    <input type="text" class="form-control  @error('actors') is-invalid @enderror" name="actors" id="actors" placeholder="Titre du serie" value="{{ old('actors', $serie->actors) }}">
                    @error('actors')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">Categorie : Appuie sur CTRL pour selection multiple</label>
                    <select list="categories" min="1" max="3" type="text" class="form-control  @error('category') is-invalid @enderror" name="category" id="category" placeholder="Categories" value="{{ old('category', $serie->category) }}" multiple>
                        <option value="Comédie">Comédie</option>
                        <option value="Drame">Drame</option>
                        <option value="Animation">Animation</option>
                        <option value="Documentaire">Documentaire</option>
                        <option value="Mini-série">Mini-série</option>
                        <option value="Policier">Policier</option>
                        <option value="Romance">Romance</option>
                        <option value="Travail">Travail</option>
                        <option value="Fantastique">Fantastique</option>
                        <option value="Jeunesse">Jeunesse</option>
                        <option value="Science-fiction">Science-fiction</option>
                        <option value="Thriller">Thriller</option>
                        <option value="Aventure">Aventure</option>
                        <option value="Historique">Historique</option>
                        <option value="Sport">Sport</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="Épouvante-horreur">Épouvante-horreur</option>
                        <option value="Télé-réalité">Télé-réalité</option>
                        <option value="Musique">Musique</option>
                        <option value="Comédie">Comédie</option>
                        <option value="dramatique">dramatique</option>
                    </select>


                    @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">Date de sortie</label>
                    <input type="datetime" class="form-control  @error('year') is-invalid @enderror" name="year" id="year" placeholder="aaaa-mm-dd" value="{{ old('year', $serie->year) }}">
                    @error('year')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>


        </form>
    </div>
</div>
</div>
@endsection


