@extends('layouts.main')
@section('head')
    <style>
        /* img {
                                                                                                                                                                                                                                                                                                                                                                height: 600px;
                                                                                                                                                                                                                                                                                                                                                            } */

    </style>
@endsection

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-top">
                <div>
                    <img src="{{ $serie->image }}">
                </div>
                <br>
                <br>
                <div class="card-info">
                    <h1 id="serie_title">{{ $serie->title }}</h1>
                    <br>
                    <span class="date">
                        <h3> Sortie le :</h3> {{ $serie->year }}
                    </span>
                    <p class="date">
                    <br>
                    <h3> Acteurs :</h3> {{ $serie->actors }}</p>
                    <p class="date">
                    <br>
                    <h3> Categories :</h3> {{ $serie->category }}</p>
                    <br>
                    <h3>Description</h3>
                    <p class="excerpt">{{ $serie->content }}</p>
                </div>
                <br>
                <br>
                <br>
                <div>
                    <iframe style="position: relative; left: 200px" width="700" height="520" src="{{ $serie->movie }}"> </iframe>
                </div>
            </div>

            <br>
            <form action="{{ route('favorites.store') }}" method="POST">
                @csrf
                <div class="comments_here">
                    <input type="hidden" id="serie_id" name=" title" value="{{ $serie->title }}" />
                    @if (!(is_null(Auth::user())))
                    <input type="hidden" id="user_id" name=" user_id" value="{{ Auth::user()->id }}" />
                    @endif
                    <input type="hidden" id="serie_id" name=" year" value="{{ $serie->year }}" />

                    <input type="submit" name="send" class="btn btn-outline-primary" value="Ajouter aux favoris" />
                </div>

            </form>
            <br>
            <br>
            {{-- ############ Comments here ############# --}}
            <div>
                <div>
                    <h2 style="font-size: 25px; color:blue">Commentaires des utilisateurs </h2>
                    <ul>

                        @foreach($comments as $comment)
                            @if( $comment->serie_id == $serie->id)
                            <li class="affichage-comments"><b>{{ App\Models\User::where('id',  $comment->user_id)->first()->name; }} : </b>{{ $comment->content }} </li>
                            @endif
                        @endforeach

                    </ul>
                </div>
                {{-- inserer un commentaire ici --}}
                <br>
                <br>
                <div>
                    @auth
                    <form action="{{ route('commentStore', $serie->url) }}" method="POST">
                        @csrf
                        <div class="comments_here">
                            <input type="text" class="form-control  @error('content') is-invalid @enderror" name="content" id="content" placeholder="say something here ..." value="">
                            <input type="hidden" id="serie_id" name=" serie_id" value="{{ $serie->id }}" />
                            <input type="hidden" id="user_id" name=" user_id" value="{{ $serie->user_id }}" />
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <input type="submit" name="send" class="btn btn-outline-primary" value="Add Comment" />
                        </div>

                    </form>




                       <!-- <form action="{{ route('commentStore', $serie->id) }}" methode="POST">
                            @csrf
                            @method('POST')
                            <div class="comments_here">
                                <h3> Did you liked? </h3>
                                <input type="text" id="content" name="content" class="form-control"
                                    placeholder="Say something..." />
                                <input type="hidden" id="serie_id" name=" serie_id" value="{{ $serie->id }}" />

                                <input type="submit" name="send" class="btn btn-outline-primary" value="Add Comment" />
                            </div>
                        </form>-->
                    @endauth
                    @guest
                        <h1>Vous devez vous authentifier pour laisser des commentaires.</h1>
                    @endguest

                </div>
            </div>
        </div>

    @endsection
