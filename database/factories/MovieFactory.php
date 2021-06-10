<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'title' => $this->faker->title(),
            'director'=> Str::random(10),
            'imageUrl'=> Str::random(10),
            'duration' => rand(1,500),
            'releaseDate' => $this->faker->dateTimeBetween('now', '+30 years'),
            'genre' => Str::random(10),
        ];
    }
}
