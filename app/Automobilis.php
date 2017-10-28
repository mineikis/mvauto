<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobilis extends Model
{
	public $timestamps = false;
	
	public static function brangiausias(){
		return Automobilis::where('aktyvus', '1')->orderBy('kaina', 'desc')->get()->first();
	}

	public static function visiAktyvus(){
		return Automobilis::where('aktyvus', '1')->get();
	}

	public static function visiAktyvusLietuvoje(){
		return Automobilis::where('aktyvus', '1')->where('greitai', '0')->get();
	}

	public static function visiAktyvusGreitai(){
		return Automobilis::where('aktyvus', '1')->where('greitai', '1')->get();
	}


	public static function visiAktyvusPagalRegistracija(){
		return Automobilis::where('aktyvus', '1')->orderBy('pirmos_reg_data', 'desc')->get();
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

	public function kebulo_tipas(){
		return $this->belongsTo('App\KebuloTipas');
	}

		public function spalva(){
		return $this->belongsTo('App\Spalva');
	}

	public static function latest_cars(){
		return Automobilis::where('aktyvus', '1')->orderBy('kaina', 'desc')->take(6)->get();
	}

	public static function most_expensive_lietuvoje_all(){
		return Automobilis::where('aktyvus', '1')->where('greitai', '0')->orderBy('kaina', 'desc')->get();
	}

	public static function most_expensive_greitai_all(){
		return Automobilis::where('aktyvus', '1')->where('greitai', '1')->orderBy('kaina', 'desc')->get();
	}
}
