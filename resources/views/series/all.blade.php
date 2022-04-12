@extends('layouts.main')

@section($title = 'Series')
@section('content')
    <div class="card">

        <div class="card-content">
            <div class="content">
                @if(session()->has('info'))
                    <div class="notification is-success">
                        {{ session('info') }}
                    </div>
                @endif

                @if (count($series) > 0)
                <ul style="position: relative;
                left: 0px;">
                    @foreach ($series as $serie)

                        <li class="" style="display: inline-block; padding: 10px">
                            <figure	class="">
                                <a href="{{ route('singleSeriePage', $serie->url) }}" class="" id="">
                             <img class="" itemprop="image" src="{{ $serie->image }}" alt="image" title="{{ $serie->title }}" width="350" height="350"></a>
                            </figure>
                        </li>
                        <li class="block-serie" style="display: inline-block; padding: 10px">
                            <h4 class=""><a href="{{ route('singleSeriePage', $serie->url) }}" class="" id="">{{ $serie->title }}</a><span class="">({{ $serie->year }})</span></h4>
                            <p class="">{{ $serie->category }}</p>
                           <p class="">Série de {{ $serie->serie_maker }}</p>
                           <figcaption>Note : </figcaption>

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

                            <a class="button is-primary" href="#">Noter</a>
                        </li>
                        <br>

                    @endforeach
                </ul>
                {{ $series->links() }}
                @else
                    <p>No series found</p>
                @endif
            </div>
        </div>
    @endsection

