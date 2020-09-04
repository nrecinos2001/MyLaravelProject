<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    protected $fillable = [
        'student_id',
        'subject_id',
        'score',
        'UV',
        'cicle'
    ];
    public function subject(){
        return $this->hasOne('App\Models\Subjects', 'id', 'subject_id');
    }
}
