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
                <div class="card-info">
                    <h1 id="serie_title">{{ $serie->title }}</h1>
                    <span class="date">
                        <h3> Sortie le :</h3> {{ $serie->year }}
                    </span>
                    <p class="date">
                    <h3> Acteurs :</h3> {{ $serie->actors }}</p>
                    <p class="date">
                    <h3> Categories :</h3> {{ $serie->category }}</p>
                    <hr>
                    <h3>Description</h3>
                    <p class="excerpt">{{ $serie->content }}</p>
                </div>
                <div>
                    <img src="{{ $serie->movie }}">
                </div>
            </div>
            <hr>
            {{-- ############ Comments here ############# --}}
            <div>
                <div>
                    <h3>Comments</h3>
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
                            <input type="text" class="form-control  @error('content') is-invalid @enderror" name="content" id="content" placeholder="saiy something here ..." value="">
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
