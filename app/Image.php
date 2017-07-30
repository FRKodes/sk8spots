<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $table = "spot_images";
	protected $fillable = ['name'];
    
    public function spot()
    {
    	return $this->belongsTo(Spot::class);
    }

}
