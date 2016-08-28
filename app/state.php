<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
    	'name',
    	'short_name',
    	'country_id'
    ];

    public function cities()
    {
    	return $this->hasMany(City::class);
    }
}
