<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use App\Automobilis;
use View;
use LaravelLocalization;


class PradziaController extends Controller
{
	public function index(){
		$isLocaleLt = self::isLocaleLt();
		$brangiausiasAuto = Automobilis::brangiausias();
		$naujausi = Automobilis::latest_cars();
		$nuotraukosTitulinio = self::nuotraukos($brangiausiasAuto->id);
		$aktyviosMarkes = self::aktyviosMarkes();

		return View::make('pradzia', compact('brangiausiasAuto', 'nuotraukosTitulinio', 'isLocaleLt', 'naujausi', 'aktyviosMarkes'));
	}

	public function nuotraukos($id){
		$nuotraukos = array();
		foreach (glob(public_path().'/images/'.$id.'/*.jpg') as $file) {
			$nuotraukos[] = basename($file);
		}

		return $nuotraukos;
	}

	public function isLocaleLt(){
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return true;
		} else {
			return false;
		}
	}

	public function aktyviosMarkes(){
		$markes = array();
		$aktyvus = Automobilis::visiAktyvus();
		foreach ($aktyvus as $auto) {
			$markes[] = $auto->modelis->marke->pavadinimas;
		}
		return array_unique($markes);
	}
}
