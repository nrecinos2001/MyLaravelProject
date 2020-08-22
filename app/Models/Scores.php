<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    protected $fillable = [
        'student_id',
        'subject_id',
        'score',
        'UV'
    ];
}
