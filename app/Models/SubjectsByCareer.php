<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class subjectsbycareer extends Model
{
    protected $fillable = [
        'university_id',
        'career_id',
        'faculty_id',
        'subjects'
    ];

    public function university(){
        return $this->hasOne('App\Models\Universities', 'id', 'university_id');
    }
}
