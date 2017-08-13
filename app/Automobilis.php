<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobilis extends Model
{

	public static function brangiausias(){
    	return $this->orderBy('kaina', 'desc')->get()->first();
    }

    public static function visiAktyvus(){
    	return Automobilis::where('aktyvus', '1')->get();
    }
}
