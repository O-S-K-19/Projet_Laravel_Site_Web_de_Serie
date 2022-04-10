<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use App\Models\Serie;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    //------POUR LES UTILISATEURS ET LES SERIES : ------------------------------------------------------------------------------------------------------------------------------------------------------------

    // withouEvents permet d'interdire le declenchement des evenements de type listener
        // id = 1
        User::withoutEvents(function () {
        // Creation de 1 admin
        User::factory()->create([
                'role' => 'admin',
            ]);
        // id = 2, 3, 4 et serie_id = 1, 2, 3, 4, 5, 6
        // Creation de 3 producteurs qui ont chacun 3 series
        User::factory()->count(3)->has(
            Serie::factory()->count(3),
        )->create([
                'role' => 'producer',
        ]);
        // id = 5, 6
        // Creation de 2 users
        User::factory()->count(2)->create([
            'role' => 'subscriber',
        ]);
        });


    //------POUR LES COMMENTAIRES : ------------------------------------------------------------------------------------------------------------------------------------------------------------

    // les premiers commentaires pour chaque serie effectuer par les utilisateurs de façon aléatoire

    foreach (range(1, count(Serie::all()) - 1) as $i) {
        Comment::factory()->create([
            'serie_id' => $i,
            'user_id' => rand(1, count(User::all())),
        ]);
    }

    //commentaire pour les autres niveaux
    /*
    // creation d'un facker
    $faker = \Faker\Factory::create();
        // commentaire pour la serie avec id = 1 effectuer par le producteur avec id = 3, et 2 abonés avec id =
        Comment::create([ // commentaire principale (parent)
            'serie_id' => 1,
            'author_id' => 3,
            'content' => $faker->paragraph($nbSentences = 4, $variableNbSentences = true),
            'children' => [ // commentaire fils
                [
                    'serie_id' => 1,
                    'author_id' => 4,
                    'content' => $faker->paragraph($nbSentences = 4, $variableNbSentences = true),
                    'children' => [ // commentaire petit fils
                        [
                            'serie_id' => 1,
                            'author_id' => 2,
                            'content' => $faker->paragraph($nbSentences = 4, $variableNbSentences = true),
                        ],
                    ],
                ],
            ],
        ]);
        */
    //------POUR LES CATEGORIES : ------------------------------------------------------------------------------------------------------------------------------------------------------------
        //insertion de 3 categories
        //par exemple
        // pour le genre : Categorie 1
        // pour le slug : categorie-1

        for($i = 1; $i <= 3; $i++){
            DB::insert('insert into categories (genre, slug) values (?, ?)', ['Categorie '.$i, 'categorie-'.$i]);
        }

    //------ POUR RELIER LES CATEGORIES AUX SERIES : ------------------------------------------------------------------------------------------------------------------------------------------------------------

        $series = Serie::all();
        foreach ($series as $serie) {

            $cat_id = range (1, count(Category::all()));

                shuffle ($cat_id); //pour faire un mélange des elements du tableaux
                $n = rand (1, count(Category::all())); // une serie peut avoir entre 1 et categories total de genres

                for ($i = 0; $i < $n; ++$i) {
                    DB::table ('category_serie')->insert ([
                        'category_id' => $cat_id[$i],
                        'serie_id' => $serie->id,
                    ]);
                }
            }
    }
}
