<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
	protected $fillable = [
		'title',
		'address',
		'neighborhood',
		'city',
		'state',
		'country',
		'coords',
		'user_id',
		'category_id'
	];

	public function owner()
	{
		return $this->belongsTo(User::class);
	}

	public function city()
	{
		return $this->belongsTo(City::class);
	}
	
	public function category()
	{
		return $this->belongsTo(SpotCategory::class);
	}
	
	public function state()
	{
		return $this->belongsTo(State::class);
	}
	
	public function country()
	{
		return $this->belongsTo(Country::class);
	}
}
