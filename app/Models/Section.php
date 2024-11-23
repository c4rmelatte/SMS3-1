<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'section';
    protected $fillable = [
        'course_id',
        'year_level',
        'section'
    ];
}
