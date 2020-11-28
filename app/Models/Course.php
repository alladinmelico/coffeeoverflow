<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User as Teacher;
use App\Models\User as Student;
use App\Models\CourseStudents as Students;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description','teacher_id', 'subject_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_students', 'student_id', 'course_id')->using(Students::class);
    }
}