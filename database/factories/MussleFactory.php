<?php

namespace Database\Factories;

use App\Model\Mussle;
use App\Models\Models\Musscle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Musscle::class, function(Faker $faker){
    return[
       'title' => $faker->word,
       'content' => $faker->realText
    ];
});

class MussleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = App\Model\Musscle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
