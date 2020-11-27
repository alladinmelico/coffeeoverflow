<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\Schoolworks;
class CourseStudents extends Pivot
{
    use HasFactory;
    public $incrementing = true;
    public $table = 'course_students'; //getting error from default 's'
}