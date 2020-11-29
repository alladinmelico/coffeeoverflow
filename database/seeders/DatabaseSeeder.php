<?php

namespace Database\Seeders;

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
        $this->call([
            SubjectSeeder::class
        ]);

        \App\Models\User::factory(300)->create();
        \App\Models\Course::factory(50)->create();
        \App\Models\CourseStudents::factory(50)->create();
        \App\Models\SchoolWorks::factory(50)->create();
        \App\Models\StudentSchoolWorks::factory(100)->create();

    }
}