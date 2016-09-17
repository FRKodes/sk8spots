<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpotCategory extends Model
{
    public function spots()
    {
    	return $this->belongsToMany(Spot::class);
    }
}
