<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticable
{
    use Notifiable;

    /**
     * The attributes that are mass assignamble.
     * 
     * @var array
     * */
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
        'image',
        'isadmin'
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

    //RELATIONSHIPS
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
