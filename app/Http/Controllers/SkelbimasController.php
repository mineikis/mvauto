<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use App\Skelbimas;
use App\Automobilis;
use View;


class SkelbimasController extends Controller
{
	public function index(){
		$brangiausiasAuto = self::brangiausiasAutomobilis();
		$nuotraukosTitulinio = self::nuotraukos($brangiausiasAuto->skelbimai->first()->id);

		return View::make('pradzia', compact('brangiausiasAuto', 'nuotraukosTitulinio'));
	}

	public function brangiausiasAutomobilis(){
		$auto = array();
		$skelbimai = Skelbimas::visiAktyvus();
		foreach ($skelbimai as $skelbimas) {
			$auto[] = $skelbimas->automobilis;
		}
		$sorted = array_sort($auto, 'kaina');
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
