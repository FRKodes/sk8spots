<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    protected $fillable = [
    	'name',
    	'short_name',
    	'country_id'
    ];
}
