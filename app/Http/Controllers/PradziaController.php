<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use App\Automobilis;
use View;


class PradziaController extends Controller
{
	public function index(){
		$brangiausiasAuto = self::brangiausiasAutomobilis();
		$nuotraukosTitulinio = self::nuotraukos($brangiausiasAuto->id);

		return View::make('pradzia', compact('brangiausiasAuto', 'nuotraukosTitulinio'));
	}

	public function brangiausiasAutomobilis(){
		$auto = array();
		$automobiliai = Automobilis::visiAktyvus();
		//foreach ($skelbimai as $skelbimas) {
		//	$auto[] = $skelbimas->automobilis;
		//}
		$sorted = array_sort($automobiliai, 'kaina');
		$brang = array_last($sorted);

		return $brang;
	}

	public function nuotraukos($id){
		$nuotraukos = array();
		foreach (glob(public_path().'/images/'.$id.'/*.jpg') as $file) {
			$nuotraukos[] = basename($file);
		}

		return $nuotraukos;
	}
}
