<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobilis extends Model
{
	public static function brangiausias(){
		return Automobilis::where('aktyvus', '1')->orderBy('kaina', 'desc')->get()->first();
	}

	public static function visiAktyvus(){
		return Automobilis::where('aktyvus', '1')->get();
	}

	public function modelis(){
		return $this->belongsTo('App\Modelis');
	}

	public function pavaru_deze(){
		return $this->belongsTo('App\PavaruDeze');
	}

	public function kuro_tipas(){
		return $this->belongsTo('App\KuroTipas');
	}

	public static function latest_cars(){
		return Automobilis::where('aktyvus', '1')->orderBy('patalpinimo_data', 'desc')->take(6)->get();
	}

		public static function most_expensive_all(){
		return Automobilis::where('aktyvus', '1')->orderBy('kaina', 'desc')->get();
	}
}
