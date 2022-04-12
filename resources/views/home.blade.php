
@extends('layouts.main')

@section($title = "Home")

@section('content')
    @if (count($series1) > 0 && count($series2) > 0)
        <div class="laho-section-popular">
            <div class="">
                <h3 class="">Tendances : <a href="{{ route('seriesPage') }}" class=""><span style="font-size: 15px">Tout voir</span></a></h3>
            </div>
            <ul>

            @foreach ($series1 as $serie )
                <li class="" style="display: inline-block; padding: 10px">
                    <a href="{{ route('singleSeriePage', $serie->url) }}" class="" data-rel="" data-sc-product-id="" >
                        <figure data-rel="" class="">
                            <img alt="" class="" data-sc-product-id="" height="200" src="{{ $serie->image }}" alt="image" title="" width="120"/>
                            <figcaption>Note : </figcaption>
                            <p class="">{{ $serie->category }}</p>
                            <p class="">Série de {{ $serie->serie_maker }}</p>
                            <figcaption class="">{{ $serie->title }}</figcaption>
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
                        </figure>
                    </a>
                </li>
            @endforeach
            </ul>
        </div>

        <div class="laho-section-popular">
            <div class="">
                <h3 class="">Top : <a href="{{ route('seriesPage') }}" class=""><span style="font-size: 15px">Tout voir</span></a></h3>
            </div>
            <ul>
                @foreach ($series2 as $serie )
                <li class="" style="display: inline-block; padding: 10px">
                    <a href="{{ route('singleSeriePage', $serie->url) }}" class="" data-rel="" data-sc-product-id="" >
                        <figure data-rel="" class="">
                            <img alt="" class="" data-sc-product-id="" height="200" src="{{ $serie->image }}" alt="image" title="" width="120"/>
                            <figcaption>Note : 6.8</figcaption>
                            <p class="">{{ $serie->category }}</p>
                            <p class="">Série de {{ $serie->serie_maker }}</p>
                            <figcaption class="">{{ $serie->title }}</figcaption>
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
                        </figure>
                    </a>
                </li>
            @endforeach
            </ul>
        </div>

    @else
        <p>No series found</p>
@endif
@endsection
