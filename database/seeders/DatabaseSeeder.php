<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

use App\Models\Tag;
use App\Models\User;
use App\Models\Serie;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder

{

    public function creatSerie( array $input)
    {

        $serie = new Serie();

        $serie->user_id =  $input[0];
        $serie->serie_maker =  $input[1];
        $serie->title =  $input[2];
        $serie->content =  $input[3];
        $serie->actors =  $input[4];
        $serie->category =  $input[5];
        $serie->url = urlencode($input[2]);
        $serie->year =  $input[6];
         $serie->image =  $input[7];
        $serie->movie =  $input[8];

        $serie->save();
    }




    public function createUser(array $input)
    {

        User::create([
            'name' => $input[0],
            'email' => $input[1],
            'password' => Hash::make($input[2]),
            'role' => $input[3],
            'authorize_to' => boolval(intval($input[4])),
            'remember_token' => 'null',
            'email_verified_at' => now(),
        ]);
    }


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    //------POUR LES UTILISATEURS ET LES SERIES : ------------------------------------------------------------------------------------------------------------------------------------------------------------


        //USERS
        $file_csv1 = ".\public\Data\users.csv";
        $file1 = fopen($file_csv1, 'r');
        while (!feof($file1)){
            $tab_line1[] = fgetcsv($file1, 1024, ',');
        }
        fclose($file1);

        for( $i = 0; $i < count($tab_line1) - 1; $i++){

            static::createUser((array)$tab_line1[$i]);
        }

        //SERIES
        $file_csv = ".\public\Data\series_data.csv";
        $file = fopen($file_csv, 'r');
        while (!feof($file)){
            $tab_line[] = fgetcsv($file, 1024, ';');
        }
        fclose($file);

        for( $i = 0; $i < count($tab_line) - 1; $i++){

            //print_r((array)$tab_line[$i]);

            static::creatSerie((array)$tab_line[$i]);
        }


    // withouEvents permet d'interdire le declenchement des evenements de type listener
        // id = 1
       /* User::withoutEvents(function () {
        // Creation de 1 admin
        User::factory()->count(3)->create([
                'role' => 'admin',
            ]);
        // id = 2, 3, 4 et serie_id = 1, 2, 3, 4, 5, 6
        // Creation de 3 producteurs qui ont chacun 3 series
        User::factory()->count(3)->create([
            'role' => 'producer',
        ]);
        //->has(
            //Serie::factory()->count(3),
        //)->create([
                //'role' => 'producer',
       // ]);
        // id = 5, 6
        // Creation de 2 users
        User::factory()->count(5)->create([
            'role' => 'subscriber',
        ]);
        });
*/



    //------POUR LES COMMENTAIRES : ------------------------------------------------------------------------------------------------------------------------------------------------------------


    //------POUR LES CATEGORIES : ------------------------------------------------------------------------------------------------------------------------------------------------------------
        //insertion de 3 categories
        //par exemple
        // pour le genre : Categorie 1
        // pour le slug : categorie-1

        $tabCat = ['Comédie','Drame','Animation','Documentaire','Action','Mini-série','Policier','Romance','Fantastique','Jeunesse','Science-fiction','Thriller','Aventure','Historique','Sport','Fantasy','Épouvante-horreur','Télé-réalité', 'Musique','Comédie dramatique'];

        foreach($tabCat as $cat){
        DB::insert('insert into categories (genre, slug) values (?, ?)', [''.$cat, '#'.$cat]);
        }


    }
}
