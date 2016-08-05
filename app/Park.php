<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    public function amenities()
    {
    	return $this->belongsToMany('App\Amenity', 'amenity_park');
    }

    public function scopeSearch($query, $search)
    {
    	return $query->where('name', 'LIKE', "%$search%")
    		->orWhere('zip_code', 'LIKE', "$search%");
    }
}
