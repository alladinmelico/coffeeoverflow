<?php

namespace Database\Factories;

use App\Models\StudentSchoolworks;
use App\Models\schoolworks;
use App\Models\CourseStudents;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentSchoolworksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentSchoolworks::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'schoolwork_id'=>schoolworks::inRandomOrder()->first()->getKey(),
            'course_student_id' => (CourseStudents::inRandomOrder()->get('student_id')->first())->student_id
        ];
    }
}