<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    public function parks()
    {
    	return $this->belongsToMany('App\Park', 'amenity_park')->withTimestamps();
    }
}
