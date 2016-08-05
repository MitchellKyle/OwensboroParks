<?php

namespace App\Http\Controllers;

use App\Amenity;

use App\Park;

use Illuminate\Http\Request;

use App\Http\Requests;

class AmenitiesController extends Controller
{
    public function index()
    {
    	$amenities = Amenity::all()->sortBy('name');

			return view('amenities.index', compact('amenities'));    	
    }

    public function show(Amenity $amenity, Park $park)
    {
    	return view('amenities.show', compact('amenity'));
    }
}
