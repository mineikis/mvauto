<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use LaravelLocalization;
use App\Automobilis;

class AutomobilisController extends Controller
{
	public function index($id){
		$automobilis = Automobilis::find($id);
		$nuotraukos = self::nuotraukos($id);
		$isLocaleLt = self::isLocaleLt();
		$reklama = Automobilis::inRandomOrder()->where('aktyvus', '1')->take(3)->get();
		
		return View::make('automobilis', compact('automobilis', 'nuotraukos', 'isLocaleLt', 'reklama'));
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

}
