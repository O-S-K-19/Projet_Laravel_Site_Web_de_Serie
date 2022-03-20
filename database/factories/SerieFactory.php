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
            //'author_id' => $this->faker->userName,
            'title' => $title,
            'content' => $this->faker->paragraph(),
            'acteurs'=> $this->faker->name(),
            'url'=>urlencode($title),
            'tags'=> $this->faker->word(),
            //$table->dateTime('date')->useCurrent();
            //$table->string('status', 45)->default('draft');
        ];
    }
}
