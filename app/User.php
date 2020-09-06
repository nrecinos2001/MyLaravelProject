<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function university()
    {
        return $this->hasOne('App\Models\Universities', 'id', 'university_id');
    }
    public function career(){
        return $this->hasOne('App\Models\Careers', 'id', 'career_id');
    }
    public function faculty(){
        return $this->hasOne('App\Models\Faculties', 'id', 'faculty_id');
    }
    public function country(){
        return $this->hasOne('App\Models\Countries', 'id', 'country_id');
    }
}
