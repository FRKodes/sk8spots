<?php

namespace App\Http\Controllers;
use App\Spot;
use App\City;
use App\State;
use App\SpotCategory;
use App\Country;
// use App\Image;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Hash;

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
		$cities = City::with('state')->orderBy('state_id')->get();
		$states = State::orderBy('name')->pluck('name', 'id');
		$spot_categories = SpotCategory::orderBy('id')->pluck('name', 'id');
		return View('spot.create', compact('cities', 'states', 'spot_categories'));
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

			$slug = str_replace(' ', '-', $request->get('title'));
			$slug .= "_" . rand(1,1000);

			$spot = Spot::create([
				'title' => $request->get('title'),
				'slug' => $slug,
				'address' => $request->get('address'),
				'neighborhood' => $request->get('neighborhood'),
				'city_id' => $request->get('city_id'),
				'state_id' => $request->get('state_id'),
				'country_id' => 1, /*it's hardcoded for México*/
				'coords' => $request->get('coords'),
				'category_id' => $request->get('category_id'),
				'user_id' => (Auth::check()) ? Auth::user()->id : 0
			]);
			

			if ($spot->save())
				$request->session()->flash('alert-success', '¡Gracias por colaborar! El spot fué guardado exitosamente, nuestro equipo lo revisará y en breve estará en la lista de resultados.');

			
			//the uploading photos part begins
			$s3 = \Storage::disk('s3');
			$photos = $request->file('photos');

			// var_dump($photos);

			if ($photos[0] != NULL) {
				foreach ($photos as $photo) {
					$imageFileName = time() . '-' . rand(1,100) . '.' . $photo->getClientOriginalExtension();
					$filePath = '/spots/' . $imageFileName;
					$filePath_360 = '/spots/360/' . $imageFileName;
					$s3->put($filePath, file_get_contents($photo), 'public');

					/*
					 * Resizing images
					*/
					$img_resized = Image::make($photo);
					$img_resized->resize(360, null, function ($constraint) {
					    $constraint->aspectRatio();
					})->encode('jpg');
					$img_resized->save();

					dd($img_resized);

					$s3->put($filePath_360, file_get_contents($img_resized->dirname), 'public'); /*uploading to S3*/
					// return $img->response('jpg');

					$spot->images()->create(['name' => $imageFileName]);
					//each file needs to be attached to the spot in the db
					
				}

				// at this time the images were uploaded
			}

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
	public function show($slug)
	{

		$spot = Spot::whereSlug($slug)->first();
		return View('spot.show', compact('spot'));
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
