<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skelbimas extends Model
{
	public function aktyvus(){
		return $this->where('aktyvus', "1").get();
	}

	public static function visiAktyvus(){
    	return Skelbimas::where('aktyvus', '1')->get();
    }

    public function automobilis(){
    	return $this->belongsTo(Automobilis::class);
    }
}
