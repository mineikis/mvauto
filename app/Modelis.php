<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelis extends Model
{
	public $timestamps = false;

    	public function marke(){
			return $this->belongsTo('App\Marke');
	}
}
