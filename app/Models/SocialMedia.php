<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $table = 'socialmedia';
    protected $fillable = [
        'socialName',
        'socialPhoto'
    ];
}
