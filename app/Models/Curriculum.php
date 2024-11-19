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
}
