<?php

namespace Database\Factories;

use App\Models\schoolworks;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolworksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = schoolworks::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id'=> Course::inRandomOrder()->first()->getKey(),
            'items'=> $this->faker->numberBetween($min = 0, $max = 100)
        ];
    }
}