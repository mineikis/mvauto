<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Automobilis;
use App\Modelis;
class AutomobiliaiController extends Controller
{
	public function index(){
		$automobiliai = Automobilis::all();
		return View::make('automobiliai', compact('automobiliai'));
	}

	public function marke($pavadinimas){
		$automobiliai = Automobilis::whereHas('modelis.marke', function ($q) use ($pavadinimas){
			$q->where('pavadinimas', 'like', '%'.$pavadinimas.'%');
		})
		->where('aktyvus', '1')
		->get();
		return View::make('automobiliai', compact('automobiliai'));
	}
}
