@extends('layouts.main')

@section($title = "Series")
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">series</p>
        </header>
        <div class="card-content">
            <div class="content">
                @if(session()->has('info'))
                    <div class="notification is-success">
                        {{ session('info') }}
                    </div>
                @endif
                @if (Route::prefix('/admin'))
                <a class="button is-info" href="{{ route('series.create') }}">Créer une série</a>
                @endif
                @if (count($series) > 0)
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!Route::prefix('/admin'))
                        @foreach($series as $serie)
                                <tr>
                                    <td>{{ $serie->id }}</td>
                                    <td><strong><a href="/series/{{$serie->url}}">{{$serie->title }}</a></strong></td>
                                </tr>
                            @endforeach
                        @else
                            @foreach($series as $serie)
                                <tr>
                                    <td>{{ $serie->id }}</td>
                                    <td><strong>{{ $serie->title }}</strong></td>
                                    <td><a class="button is-primary" href="{{ route('singleSeriePage', $serie->url) }}">Voir</a></td>
                                    <td><a class="button is-warning" href="{{ route('series.edit', $serie->url) }}">Modifier</a></td>
                                    <td>
                                        <form action="{{ route('series.destroy', $serie->url) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="button is-danger" type="submit">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                @else
                    <p>No series found</p>
                @endif
            </div>
        </div>
    </div>


        <ul style="position: relative;
        left: 150px;">
            @for ($i = 0; $i < 7; $i++)
                <li class="" style="display: inline-block; padding: 10px">
                    <figure	class="">
                            <img class="" itemprop="image" src="https://media.senscritique.com/media/000020537587/150/moon_knight.jpg" alt="Affiche Moon Knight" title="Affiche Moon Knight" width="150" height="150">
                    </figure>
                </li>
                <li class="block-serie" style="display: inline-block; padding: 10px">
                    <h4 class=""><a href="#" class="" id="">Moon Knight</a><span class="">(2022)</span></h4>
                    <p class="">
                        <span class="" ></span> 47 min.<time datetime="2022-03-30" >30 mars 2022</time> (France). 1 saison. Action, aventure et fantastique.</p>
                   <p class="">Série de <a href="#" class="">Jeremy Slater</a> avec Oscar Isaac, Ethan Hawke, May Calamawy</p>
                </li>
                <br>
            @endfor
        </ul>









@endsection








