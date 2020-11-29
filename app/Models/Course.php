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

    protected $fillable = ['name', 'description','teacher_id', 'subject_id', 'code'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_students', 'course_id', 'student_id')->using(Students::class);
    }

    public function studentClasses()
    {
        return $this->hasMany(Students::class);
    }

    public function schoolworks(){
        return $this->hasMany('App\Models\Schoolworks');
    }
}