
@extends('layouts.main')

@section($title = "Home")

@section('content')
    @if (count($series1) > 0 && count($series2) > 0)
        <div class="laho-section-popular">
            <div class="">
                <h3 class="">Tendances : <a href="#" class=""><span style="font-size: 25px">Tout voir</span></a></h3>
            </div>
            <ul>

            @foreach ($series1 as $serie )
                <li class="" style="display: inline-block; padding: 10px">
                    <a href="{{ route('singleSeriePage', $serie->url) }}" class="" data-rel="" data-sc-product-id="" >
                        <figure data-rel="" class="">
                            <img alt="" class="" data-sc-product-id="" height="200" src="{{ $serie->image }}" alt="image" title="" width="120"/>
                            <figcaption>Note : 6.8</figcaption>
                            <p class="">{{ $serie->category }}</p>
                            <p class="">Série de {{ $serie->serie_maker }}</p>
                            <figcaption class="">{{ $serie->title }}</figcaption>
                            <a class="button is-primary" href="#">Ajouter aux favories</a>
                            <a class="button is-primary" href="#">Noter</a>
                        </figure>
                    </a>
                </li>
            @endforeach
            </ul>
        </div>

        <div class="laho-section-popular">
            <div class="">
                <h3 class="">Top : <a href="#" class=""><span style="font-size: 25px">Tout voir</span></a></h3>
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
                            <a class="button is-primary" href="#">Ajouter aux favories</a>
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
