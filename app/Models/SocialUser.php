<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialUser extends Model
{
    protected $table = 'socialuser';
    protected $fillable = [
        'user_id', 'socialmedia_id', 'link'
    ];

    public function socialMedia(){
        return $this-> hasOne('App\Models\SocialMedia', 'id', 'socialmedia_id');
    }
}
