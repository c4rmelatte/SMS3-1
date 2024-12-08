<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public $timestamps = false;
    protected $table = 'activities';
    protected $fillable = [
        'name',
        'label_activity',
        'label_student',
        'label_term',
        'max_score',
        'user_id',
        'subject_id'
    ];
}
