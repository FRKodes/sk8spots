<?php

namespace App\Http\Controllers;
use App\Spot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class SpotController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return View('spot.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{

		if ($request) {

			$spot = Spot::create([
				'title' => $request->get('title'),
				'address' => $request->get('address'),
				'neighborhood' => $request->get('neighborhood'),
				'city' => $request->get('city'),
				'state' => $request->get('state'),
				'country' => $request->get('country'),
				'coords' => $request->get('coords'),
				'category_id' => $request->get('category'),
				'user_id' => ($user = Auth::user()) ? $user->id : 0
			]);
			
			if ($spot->save())
				$request->session()->flash('alert-success', '¡Gracias por colaborar! El spot fué guardado exitosamente, nuestro equipo lo revisará y en breve estará en la lista de resultados.');

			return redirect()->back();
		}

		return back()->with('input');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
