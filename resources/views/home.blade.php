
@extends('layouts.main')

@section($title = "Home")

@section('content')
    @if (count($series) > 0)
        <div class="laho-section-popular">
            <div class="">
                <h3 class="">Tendances : <a href="#" class=""><span style="font-size: 25px">Tout voir</span></a></h3>
            </div>
            <ul>
        @for ($i = 0; $i < 7; $i++)
                <li class="" style="display: inline-block; padding: 10px">
                    <a href="#" class="" data-rel="" data-sc-product-id="" >
                        <figure data-rel="" class="">
                            <img alt="" class="" data-sc-product-id="" height="200" src="https://media.senscritique.com/media/000020537587/160/moon_knight.jpg" title="" width="120"/>
                            <figcaption>Note : 6.8</figcaption>
                            <figcaption class="">titre de serie</figcaption>
                        </figure>
                    </a>
                </li>
        @endfor
            </ul>
        </div>

        <div class="laho-section-popular">
            <div class="">
                <h3 class="">Top : <a href="#" class="">Tout voir</a></h3>
            </div>
            <ul>
        @for ($i = 0; $i < 7; $i++)
                <li class="" style="display: inline-block; padding: 10px">
                    <a href="#" class="" data-rel="" data-sc-product-id="" >
                        <figure data-rel="" class="">
                            <img alt="" class="" data-sc-product-id="" height="200" src="https://media.senscritique.com/media/000020593374/160/drole.jpg" title="" width="120"/>
                            <figcaption>Note : 6.8</figcaption>
                            <figcaption class="">titre de serie</figcaption>
                        </figure>
                    </a>
                </li>
        @endfor
            </ul>
        </div>

    @else
        <p>No series found</p>
@endif
@endsection
