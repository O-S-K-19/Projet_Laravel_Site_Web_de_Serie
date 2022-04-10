@extends('layouts.main')

@section($title = $serie->title ?? 'Consultée')
@section('content')
    <div class="card">
        <!--<header class="card-header">
            <p class="card-header-title">Titre : {{ $serie->title }}</p>
        </header>-->
        <div class="card-content">
            <div class="content">
                <!--<p>Année de sortie : {{ $serie->year }}</p>
                <hr>
                <p>{{ $serie->content }}</p>-->


                <section class="pvi-hero  type-4"
                style="background-image: url(https://media.senscritique.com/media/000020569435/1200/moon_knight.jpg);">
            </section>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati quas ratione. Repudiandae harum veritatis dolorem illum animi? Incidunt autem, amet reprehenderit eveniet exercitationem libero facere laudantium explicabo unde molestias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, quibusdam. Reiciendis maiores dolores perferendis doloribus illo, at illum laudantium voluptas vel fuga sequi doloremque quia repudiandae ipsa quibusdam, totam quae? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti eligendi a cupiditate! Id dolorum non omnis enim maxime repudiandae illum quo nostrum soluta! Eveniet non dignissimos minima labore at debitis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum recusandae odit, sapiente accusantium a quisquam delectus dolor! Earum debitis, eveniet animi voluptatem aut quaerat laborum! Suscipit </p>




                    <h4 class="d-heading-opt">
                        <span class="d-heading2-opt">Casting : acteurs principaux</span>Moon Knight</h4>
                    <div class="d-rubric-inner">

                        <li class="block-serie" style="display: inline-block; padding: 10px">
                    <div itemscope itemprop="actor" itemtype="http://schema.org/Person" class="ecot-contact">
                        <a href="/contact/Oscar_Isaac/104508" class="ecot-contact-inner" itemprop="url">
                        <img  itemprop="image" src="https://media.senscritique.com/media/000019160878/130_200/Oscar_Isaac.png" alt="Photo Oscar Isaac" title="Photo Oscar Isaac" width="130" height="200">
                        <div class="ecot-contact-caption" data-sc-tooltip="true" title="Marc Spector / Moon Knight">
                            <span class="d-offset ecot-contact-label" itemprop="name">Oscar Isaac</span>
                                                    <span class="ecot-contact-role">Marc Spector / Moon Knight</span>
                                            </div>
                    </a>
                    </div>
                        </li>

                        <li class="block-serie" style="display: inline-block; padding: 10px">
                    <div itemscope itemprop="actor" itemtype="http://schema.org/Person" class="ecot-contact">
                        <a href="/contact/Ethan_Hawke/7143" class="ecot-contact-inner" itemprop="url">
                        <img  itemprop="image" src="https://media.senscritique.com/media/000019099848/130_200/Ethan_Hawke.png" alt="Photo Ethan Hawke" title="Photo Ethan Hawke" width="130" height="200">
                        <div class="ecot-contact-caption" >
                            <span class="d-offset ecot-contact-label" itemprop="name">Ethan Hawke</span>
                                                    <span class="ecot-contact-role">Arthur Harrow</span>
                                            </div>
                    </a>
                    </div>
                        </li>


                            <div class="d-heading-opt">
                                <h6 class="d-heading2-opt">Bande-annonce</h6>
                                Moon Knight
                            </div>

                            <div class="" style="" data-rel="external-video" data-sc-no-preroll="" data-sc-video-mode="player" data-sc-video-start="{:start_at}" data-sc-video-id="OKaUa5FcuxI" data-sc-param-index-id="1084393040" data-sc-video-type="1" data-sc-video-width="700" data-sc-video-height="484" data-sc-video-poster="https://media.senscritique.com/media/000020584590/1200/moon_knight.jpg" data-sc-video-autoplay="" data-sc-video-disablerebound="" data-sc-video-delay="{:delay}" data-sc-video-hidecontrols="" data-sc-video-mute="{:mute}"><iframe width="700" height="484" src="https://www.youtube.com/embed/OKaUa5FcuxI?autoplay=&amp;start=0&amp;iv_load_policy=3" style="border: none;"
                                allowfullscreen></iframe></div>























            </div>
        </div>
    </div>
@endsection

