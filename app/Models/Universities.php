<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universities extends Model
{
    protected $fillable = ['name', 'color', 'abbreviation', 'country_id', 'logo']; 

    public function user()
    {
        return $this->hasMany(Users::class, 'university_id');    
    }
    
}
