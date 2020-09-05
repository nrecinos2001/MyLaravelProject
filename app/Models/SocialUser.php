<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialUser extends Model
{
    public $fillable = [
        'link'
    ];

    public function socialMedia(){
        return $this-> hasMany('App\Models\SocialMedia', 'id', 'socialmedia_id');
    }
}
