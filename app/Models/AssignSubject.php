<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
    protected $table = 'assigned_subject';
    protected $fillable = [
        'subject_id',
        'prof_id',
        'assigned_by'
    ];

    public function assigned_subject()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

}
