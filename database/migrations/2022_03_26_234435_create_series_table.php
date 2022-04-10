<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->default(0)->index('series_fk1_idx')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->mediumText('serie_maker')->nullable();
            $table->mediumText('title');
            $table->longText('content');
            $table->longText('actors')->nullable();
            $table->mediumText('category')->nullable();
            $table->string('url', 255)->unique();
            $table->string('status', 45)->default('draft')->nullable();
            $table->string('year');
            $table->string('image', 255)->default('none')->nullable();
            $table->string('movie', 255)->default('none')->nullable();
            $table->timestamps();
        });





        /*  NE MARCHE PAS A CAUSE DES FOREINGN KEYS
            $tabUsers = User::all();
            return $tabUsers;
            $file_csv = "C:\Users\ousse\Desktop\SCRAPPING\series_data.csv";
            $file = fopen($file_csv, 'r');
            while (!feof($file)){
                $tab_line[] = fgetcsv($file, 1024, ';');
            }
            fclose($file);
            $result = $tab_line;
            // echo '<pre>';
            // foreach($result as $line)
            //     print_r($line);
            // echo '</pre>';


        //insertion des données dans les tables
        // Pour series
            foreach($result as $col){
                DB::table('series')->insertGetId([
                    'user_id' => rand(1, count($tabUsers)),
                    'serie_maker' => $col[0],
                    'title' => $col[1],
                    'content' =>$col[2],
                    'actors' => $col[3],
                    'category' => $col[4],
                    'url' => urlencode($col[1]),
                    'year' => $col[5],
                    'image' => $col[6],
                    'movie' => $col[7],
                ]);
            }*/



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }

}
