<?php

namespace App\Http\Controllers;
use App\City;
use App\Spot;
use App\SpotCategory;
use App\State;
use App\User;
use App\Country;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
    	$users = User::orderBy('id', 'desc')->take(5)->get();
    	$spots = Spot::where('status', '=', 0)->orderBy('id', 'desc')->take(5)->get();
    	return View('admin.index', compact('users', 'spots'));
    }

    public function users()
    {
    	$users = User::orderBy('id', 'desc')->paginate(30);
    	return View('admin.users', compact('users'));
    }

    public function user($id)
    {
    	$user = User::findOrFail($id);
    	return View('admin.user', compact('user'));
    }

    public function spots()
    {
    	$spots = Spot::orderBy('id', 'desc')->paginate(30);
    	return View('admin.spots', compact('spots'));
    }

    public function spot($id)
    {	
    	$spot = Spot::findOrFail($id);
    	return View('admin.spot', compact('spot'));
    }
    public function editSpot($id)
    {
        $cities = City::with('state')->orderBy('state_id')->get();
        $states = State::orderBy('name')->pluck('name', 'id');
        $countries = Country::orderBy('name')->pluck('name', 'id');
        $spot_categories = SpotCategory::orderBy('id')->pluck('name', 'id');
        $spot = Spot::findOrFail($id);
        return View('admin.editspot', compact('spot', 'cities', 'states', 'countries', 'spot_categories'));
    }

    public function updatespot(Request $request, $id)
    {
        $input = $request->all();
        $spot = Spot::findOrFail($id);
        $spot->title = $request->get('title');
        $spot->address = $request->get('address');
        $spot->description = $request->get('description');
        $spot->neighborhood = $request->get('neighborhood');
        $spot->city_id = $request->get('city_id');
        $spot->tags = $request->get('tags');
        // $spot->other_city = $request->get('other_city');
        $spot->state_id = $request->get('state_id');
        $spot->country_id = $request->get('country_id');
        $spot->coords = $request->get('coords');
        $spot->category_id = $request->get('category_id');
        $spot->status = $request->get('status');
        
        if ($spot->save()){
            $request->session()->flash('alert-success', 'El spot fué actualizado exitosamente.');
            return redirect('/admin/spot/'.$spot->id);
        }

        return back()->with('input');
    }
}
