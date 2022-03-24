<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Serie;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {

        // $users = User::factory(10)->create();
        $users = [
            User::factory(3)->has(
            Serie::factory(2)
            //un user a n series
            //Serie::factory(2)->has(
            //     // une serie  a n commentaires
            //        Comment::factory()->count(1)
            // )->count(1))->create(),
            // User::factory(10)->has(
            // Comment::factory()->count(1)
        )->create()];
    }
    // public function run(){
    //     Serie::factory(10)->create();
    // }
}
