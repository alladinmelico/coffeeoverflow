<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;
class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'description'=> $this->faker->sentence,
            'code'=> $this->faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
            'teacher_id'=> User::inRandomOrder()->first()->getKey(),
            'subject_id'=> Subject::inRandomOrder()->first()->getKey(),
        ];
    }
}