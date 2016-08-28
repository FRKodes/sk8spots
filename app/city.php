<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $fillable = [
    	'name',
    	'state_id'
    ];
}
