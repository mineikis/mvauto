<?php

namespace App\Helpers;

use App\Automobilis;

class FooterHelper{

	public function aktyviosMarkes(){
		$markes = array();
		$aktyvus = Automobilis::visiAktyvus();
		foreach ($aktyvus as $auto) {
			$markes[] = $auto->modelis->marke->pavadinimas;
		}

		return array_unique($markes);
	}
}