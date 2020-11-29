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

        \App\Models\User::factory(20)->create();
        $this->call([
            ContactNumberSeeder::class
        ]);
        
        \App\Models\Course::factory(10)->create();
        \App\Models\CourseStudents::factory(10)->create();
        \App\Models\SchoolWorks::factory(10)->create();
        \App\Models\StudentSchoolWorks::factory(10)->create();

    }
}