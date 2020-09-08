<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
    protected $fillable = [
    'user_id',
    'cicle',
    'state',
    'name',
    'description'
    ];
}
