<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Numbers extends Model
{
    protected $fillable = [
        'university_id',
        'career_id',
        'nofSubjects'
    ];
}
