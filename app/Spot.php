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
}
