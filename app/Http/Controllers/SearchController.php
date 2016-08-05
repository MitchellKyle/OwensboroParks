<?php

namespace App\Http\Controllers;

use App\Park;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    public function search()
    {
    	$search = Request::get('q');
  	
    	$parks = DB::table('parks')
    		->select(DB::raw('name'))
    		->where('name', 'LIKE', '%$search%')
    		->get();
    	return view('parks', compact('search'));
    }
}
