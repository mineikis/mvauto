<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use LaravelLocalization;
use App\Automobilis;
use App\Marke;
use App\Modelis;

class AutomobilisController extends Controller
{
	public function index($id){
		$automobilis = Automobilis::find($id);
		$nuotraukos = self::nuotraukos($id);
		$reklama = Automobilis::inRandomOrder()->where('aktyvus', '1')->take(3)->get();
		$arklioGalia = $automobilis->galia_kw / 0.73549875;
		
		return View::make('automobilis', compact('automobilis', 'nuotraukos', 'reklama', 'arklioGalia'));
	}

	public function nuotraukos($id){
		$nuotraukos = array();
		foreach (glob(public_path().'/images/'.$id.'/*.jpg') as $file) {
			$nuotraukos[] = basename($file);
		}

		return $nuotraukos;
	}

	public function create(){
		$markes = Marke::orderBy('pavadinimas')->pluck('pavadinimas', 'id');
		$models = Modelis::orderBy('pavadinimas')->select('pavadinimas', 'kita', 'id')->get();
		foreach($models as $model){
			$model['pav'] = $model->pavadinimas .' '.$model->kita;
		}
		$modelis = $models->pluck('pav', 'id');

        return View::make('create', compact('markes', 'modelis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
		dd($request["marke"]);
    }

	public function issaugotiMarke(Request $request){
		$marke = new Marke();
		$marke->pavadinimas = $request->input('naujaMarke');
		$marke->save();

		return response()->json($marke);
    }
}
