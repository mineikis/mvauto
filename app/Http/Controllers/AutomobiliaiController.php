<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Automobilis;
use App\Modelis;
use LaravelLocalization;

class AutomobiliaiController extends Controller
{
	public function index($puslapis){
		$automobiliai = self::automobiliaiPuslapiui($puslapis);
		$isLocaleLt = self::isLocaleLt();
		return View::make('automobiliai', compact('automobiliai', 'isLocaleLt'));
	}

	public function marke($pavadinimas){
		$automobiliai = Automobilis::whereHas('modelis.marke', function ($q) use ($pavadinimas){
			$q->where('pavadinimas', 'like', '%'.$pavadinimas.'%');
		})
		->where('aktyvus', '1')
		->get();
		return View::make('automobiliai', compact('automobiliai'));
	}

	public function automobiliaiPuslapiui($puslapis){
		if($puslapis == 1){
			$start = 0;
		} else {
			$start = ($puslapis - 1) * 9;
		}

		$automobiliai = Automobilis::most_expensive_all()->slice($start, 9);
		return $automobiliai;
	}

	public function isLocaleLt(){
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return true;
		} else {
			return false;
		}
	}
}
