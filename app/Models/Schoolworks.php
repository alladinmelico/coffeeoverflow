<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseStudents;
use App\Models\StudentSchoolwork;
use App\Models\Course;

class Schoolworks extends Model
{
    use HasFactory;

    public function student_works()
    {
        return $this->belongsToMany(CourseStudents::class, 'course_students', 'schoolwork_id', 'course_student_id')->using(StudentSchoolworks::class)->withPivot('id');
    }

    public function courses() 
    {
        return $this->belongsTo(Course::class);
    }

    
    
}
