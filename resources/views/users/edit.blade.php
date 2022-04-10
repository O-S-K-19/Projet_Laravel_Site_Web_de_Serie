@extends('admin.main')

@section('content')
<br>
<div class="container">
<div class="row card text-white bg-dark">
    <h4 class="card-header">Modification d'un Utilisateur</h4>
    <div class="card-body">
        <form action="{{ route('comments.update', $comment->id ) }}" method="post">
            @csrf
            @method('PATCH')


            <div style="font-size; 50px; display:block">
                <button type="submit" class="btn btn-secondary">Enregistrer</button>
                </div>
            <div style="display:inline-block">


                <div class="form-group">
                    <label class="label">id</label>
                    <input type="number" min="1" class="form-control  @error('id') is-invalid @enderror" name="id" id="id" placeholder="id du commentaire" value="{{ old('id', $comment->id) }}">
                    @error('id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">user_id</label>
                    <input type="number" min="1" class="form-control  @error('user_id') is-invalid @enderror" name="user_id" id="user_id" placeholder="id de l'user du commentaire" value="{{ old('user_id', $comment->user_id) }}">
                    @error('user_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">serie_id</label>
                    <input type="number" min="1" class="form-control  @error('serie_id') is-invalid @enderror" name="serie_id" id="serie_id" placeholder="id de la serie" value="{{ old('serie_id', $comment->serie_id) }}">
                    @error('serie_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>



            </div>

            <div style="font-size; 50px; display:inline-block">

                <div class="form-group">
                    <label class="label">content</label>
                    <textarea class="form-control  @error('content') is-invalid @enderror" name="content" id="content" placeholder="contenu du commentaire">{{ old('content', $comment->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="label">Date</label>
                    <input type="datetime" class="form-control  @error('date') is-invalid @enderror" name="date" id="date" placeholder="aaaa-mm-dd" value="{{ old('date', $comment->date) }}">
                    @error('date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>


        </form>
    </div>
</div>
</div>
@endsection


