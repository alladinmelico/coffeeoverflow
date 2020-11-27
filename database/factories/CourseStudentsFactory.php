<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use App\Models\CourseStudents;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseStudentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourseStudents::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id'=>Course::inRandomOrder()->first()->getKey(),
            'student_id'=>User::inRandomOrder()->first()->getKey()
        ];
    }
}