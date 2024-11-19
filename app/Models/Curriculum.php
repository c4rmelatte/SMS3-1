<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = 'curriculums';
    protected $fillable = [
        'code',
        'name',
        'course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }

    //kupal si michael
    // public function courses()
    // {
    //     return $this->hasMany(Courses::class, 'curriculum_id');
    // }

}
