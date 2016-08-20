<?php

namespace App\Http\Controllers;
use App\User;
use App\Spot;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index()
    {
    	$users = User::orderBy('id', 'desc')->take(5)->get();
    	$spots = Spot::where('status', '=', 0)->orderBy('id', 'desc')->take(5)->get();
    	return View('admin.index', compact('users', 'spots'));
    }

    public function users()
    {
    	$users = User::orderBy('id', 'desc')->paginate(20);
    	return View('admin.users', compact('users'));
    }

    public function user($id)
    {
    	$user = User::findOrFail($id);
    	return View('admin.user', compact('user'));
    }

    public function spots()
    {
    	$spots = Spot::orderBy('id', 'desc')->paginate(10);
    	return View('admin.spots', compact('spots'));
    }

    public function spot($id)
    {	
    	$spot = Spot::findOrFail($id);
    	return View('admin.spot', compact('spot'));
    }
}
