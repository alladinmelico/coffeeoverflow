<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\schoolworks;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class StudentSchoolworks extends Pivot implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public $incrementing = true;
    public $table = 'student_schoolworks';

    protected $fillable = ['schoolwork_id', 'course_student_id','score'];

    public function schoolwork(){
        return $this->belongsTo(schoolworks::class);
    }

    public function registerMediaCollections(Media $media=null): void{
        $this
        ->addMediaCollection('submission')
        ->singleFile()
        ->acceptsFile(function (File $file) {
            return ($file->mimeType === 'pdf');
        });
    }
}