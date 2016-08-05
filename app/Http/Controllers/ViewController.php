<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ViewController extends Controller
{
    public function welcome()
    {
    	return view('welcome');
    }

    public function golf_index()
    {
    	return view('golf.index');
    }
}
