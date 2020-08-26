<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Universities;

class Users extends Model
{
    protected $fillable = [
        'id_student',
        'name',
        'lastname',
        'email',
        'username',
        'password',
        'gender',
        'university_id',
        'career_id',
        'faculty_id',
        'country_id',
        'image'
    ];

    public function university()
    {
        return $this->hasOne(Universities::class, 'id');
    }
}
