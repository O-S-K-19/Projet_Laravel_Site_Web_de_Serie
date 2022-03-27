<?php

namespace Database\Factories;

use App\Models\Serie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SerieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Serie::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $title = $this->faker->sentence(2,true);
        $users_id = [];
        $users = User::all();
        //var_dump($users);
        if($users != null){
            for($i = 0; $i < count($users); $i++)
                $users_id[$i] = $users[$i]->id;

        //var_dump($users_id);
        }
        else
            return;


        return [
            //'authors'=>$this->faker->name(),
            'author_id'=> random_int($users_id[0],$users_id[count($users_id)-1]),
            'title' => $title,
            'content' => $this->faker->paragraph(),
            'actors'=> $this->faker->name(),
            'category' => $this->faker->sentence(3),
            'url'=>urlencode($title),
            'year'=>$this->faker->date(),
            'tags'=> $this->faker->word(),
        ];
    }
}
