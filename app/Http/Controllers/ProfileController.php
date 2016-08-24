<?php

namespace App\Http\Controllers;
use App\User;
use App\Spot;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user = User::findOrFail(\Auth::user()->id);
    	$spots = Spot::where('status', '=', 0)->take(3)->get();

        return view('profile.index', compact('user', 'spots'));
    }
}
