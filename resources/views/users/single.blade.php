@extends('layouts.main')
        @section('head')
        <style>
            textarea { resize: none; }
            .card { width: 25em; }
        </style>
        @endsection

        @section('content')

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Titre : </p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Année de sortie :</p>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae corrupti quibusdam vitae repellendus sunt suscipit repudiandae! Exercitationem blanditiis cupiditate ipsam voluptas aliquam nulla saepe voluptatum harum iusto sapiente! Iusto, nihil.</p>
            </div>
        </div>
    </div>

    @endsection

