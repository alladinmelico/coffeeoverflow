<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentSchoolworks;

class Schoolworks extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description','course_id', 'items', 'type'];

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

    public function submissions(){
        return $this->hasMany(StudentSchoolworks::class, 'schoolwork_id','id');
    }
}