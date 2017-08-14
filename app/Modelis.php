<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelis extends Model
{
    	public function marke(){
		return $this->belongsTo('App\Marke');
	}
}
