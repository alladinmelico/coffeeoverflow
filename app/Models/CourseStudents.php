<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\Schoolworks;
use App\Models\StudentSchoolworks;

class CourseStudents extends Pivot
{
    use HasFactory;
    public $incrementing = true;
    public $table = 'course_students'; //getting error from default 's'

    public function schoolworks()
    {
        return $this->belongsToMany(Schoolworks::class, 'student_schoolworks', 'course_student_id', 'schoolwork_id')->using(StudentSchoolworks::class)->withPivot('id')->where('id', '>', '0');
    }
}