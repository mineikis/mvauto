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
			return Automobilis::find($intId)->pavaru_deze->pavadinimas_lt;
		} else if (LaravelLocalization::getCurrentLocale() == 'en') {
			return  Automobilis::find($intId)->pavaru_deze->pavadinimas_en;
		} else if(LaravelLocalization::getCurrentLocale() == 'ru'){
			return  Automobilis::find($intId)->pavaru_deze->pavadinimas_ru;
		}
	}

	public static function kebuloTipas($auto){
		$intId = $auto->id;
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return Automobilis::find($intId)->kebulo_tipas->pavadinimas_lt;
		} else if (LaravelLocalization::getCurrentLocale() == 'en') {
			return  Automobilis::find($intId)->kebulo_tipas->pavadinimas_en;
		} else if(LaravelLocalization::getCurrentLocale() == 'ru'){
			return  Automobilis::find($intId)->kebulo_tipas->pavadinimas_ru;
		}
	}
	
	public static function spalva($auto){
		$intId = $auto->id;
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return Automobilis::find($intId)->spalva->pavadinimas_lt;
		} else if (LaravelLocalization::getCurrentLocale() == 'en') {
			return  Automobilis::find($intId)->spalva->pavadinimas_en;
		} else if(LaravelLocalization::getCurrentLocale() == 'ru'){
			return  Automobilis::find($intId)->spalva->pavadinimas_ru;
		}
	}

	public static function varantiejiRatai($auto){
		$intId = $auto->id;
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return Automobilis::find($intId)->varantieji_ratai->pavadinimas_lt;
		} else if (LaravelLocalization::getCurrentLocale() == 'en') {
			return  Automobilis::find($intId)->varantieji_ratai->pavadinimas_en;
		} else if(LaravelLocalization::getCurrentLocale() == 'ru'){
			return  Automobilis::find($intId)->varantieji_ratai->pavadinimas_ru;
		}
	}

	public static function klimatoValdymas($auto){
		$intId = $auto->id;
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return Automobilis::find($intId)->klimato_valdymas->pavadinimas_lt;
		} else if (LaravelLocalization::getCurrentLocale() == 'en') {
			return  Automobilis::find($intId)->klimato_valdymas->pavadinimas_en;
		} else if(LaravelLocalization::getCurrentLocale() == 'ru'){
			return  Automobilis::find($intId)->klimato_valdymas->pavadinimas_ru;
		}
	}
	
	public static function pirmosRegSalis($auto){
		$intId = $auto->id;
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return Automobilis::find($intId)->pirmos_reg_salis->pavadinimas_lt;
		} else if (LaravelLocalization::getCurrentLocale() == 'en') {
			return  Automobilis::find($intId)->pirmos_reg_salis->pavadinimas_en;
		} else if(LaravelLocalization::getCurrentLocale() == 'ru'){
			return  Automobilis::find($intId)->pirmos_reg_salis->pavadinimas_ru;
		}
	}

	public static function gautiLokalizuota($databasetable, $object){
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return $object->pavadinimas_lt;
		} else if (LaravelLocalization::getCurrentLocale() == 'en') {
			return  $object->pavadinimas_en;
		} else if(LaravelLocalization::getCurrentLocale() == 'ru'){
			return  $object->pavadinimas_ru;
		}
	}

	public static function komentaras($auto){
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return $auto->komentaras_lt;
		} else if (LaravelLocalization::getCurrentLocale() == 'en') {
			return $auto->komentaras_en;
		} else if(LaravelLocalization::getCurrentLocale() == 'ru'){
			return $auto->komentaras_ru;
		}
	}
}