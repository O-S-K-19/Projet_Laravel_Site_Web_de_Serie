<?php

namespace Database\Factories;

use App\Models\Serie;
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


        return [
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
