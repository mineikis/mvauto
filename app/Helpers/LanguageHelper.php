<?php

namespace App\Helpers;

use App\Automobilis;
use LaravelLocalization;

class LanguageHelper{

	public static function kuroTipas($auto){
		$intId = $auto->id;
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return Automobilis::find($intId)->kuro_tipas->pavadinimas_lt;
		} else if (LaravelLocalization::getCurrentLocale() == 'en') {
			return  Automobilis::find($intId)->kuro_tipas->pavadinimas_en;
		} else if(LaravelLocalization::getCurrentLocale() == 'ru'){
			return  Automobilis::find($intId)->kuro_tipas->pavadinimas_ru;
		}
	}

	public static function pavaruDeze($auto){
		$intId = $auto->id;
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return Automobilis::find($intId)->pavaru_deze()->pavadinimas_lt;
		} else if (LaravelLocalization::getCurrentLocale() == 'en') {
			return  Automobilis::find($intId)->pavaru_deze->pavadinimas_en;
		} else if(LaravelLocalization::getCurrentLocale() == 'ru'){
			return  Automobilis::find($intId)->pavaru_deze->pavadinimas_ru;
		}
	}
}