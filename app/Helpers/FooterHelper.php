<?php

namespace App\Helpers;

use App\Automobilis;
use Carbon\Carbon;

class FooterHelper{

	public function aktyviosMarkes(){
		$markes = array();
		$aktyvus = Automobilis::visiAktyvus();
		foreach ($aktyvus as $auto) {
			$markes[] = $auto->modelis->marke->pavadinimas;
		}

		return array_unique($markes);
	}

	public function aktyvusModeliai(){
		$modeliai = array();
		$aktyvus = Automobilis::visiAktyvus();
		foreach ($aktyvus as $auto) {
			$modeliai[] = $auto->modelis->pavadinimas;
		}

		return array_unique($modeliai);
	}

	public function aktyvusMetai(){
		$metai = array();
		$aktyvus = Automobilis::visiAktyvusPagalRegistracija();
		foreach ($aktyvus as $auto) {
			$date = $auto->pirmos_reg_data;
			$dateCarbon = new Carbon($date);
			$metai[] = $dateCarbon->year;
		}

		return array_unique($metai);
	}
}