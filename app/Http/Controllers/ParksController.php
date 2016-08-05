<?php

namespace App\Http\Controllers;

use App\Park;

use App\Amenity;

use Illuminate\Http\Request;

use App\Http\Requests;

class ParksController extends Controller
{
	public function index(Request $request, Amenity $amenity)
	{
		$parks = Park::all();

    return view('parks.index', compact('parks'));
	}

	public function show(Park $park)
	{
		return view('parks.show', compact('park'));
	}
}
