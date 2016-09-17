<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Spot;

class ApiController extends Controller
{
    public function getSpots()
    {
    	$spots = Spot::where('status', '=', 1)->orderBy('id', 'desc')->get();
    	return $spots;
    }
}
