<?php

use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->String('genre')->unique();
            $table->String('slug')->unique();
        });

/*
    $tabCat = ['Comédie','Drame','Animation','Documentaire','Action','Mini-série','Policier','Romance','Fantastique','Jeunesse','Science-fiction','Thriller','Aventure','Historique','Sport','Fantasy','Épouvante-horreur','Télé-réalité', 'Musique','Comédie dramatique'];

        foreach($tabCat as $cat)
        DB::table('categories')->insertGetId([
            ['genre' => $cat,
            'slug' => $cat,
        ],
        ]);*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};

