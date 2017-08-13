<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobilis extends Model
{
	public static function brangiausias(){
		return Automobilis::orderBy('kaina', 'desc')->get()->first();
	}

	public static function visiAktyvus(){
		return Automobilis::where('aktyvus', '1')->get();
	}

	public function marke(){
		return $this->belongsTo('App\Marke');
	}

	public function pavaru_deze(){
		return $this->belongsTo('App\PavaruDeze');
	}

	public function kuro_tipas(){
		return $this->belongsTo('App\KuroTipas');
	}
}
