<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use LaravelLocalization;
use App\Automobilis;
use App\Marke;
use App\Modelis;
use App\Spalva;
use App\KebuloTipas;
use App\KuroTipas;
use App\PavaruDeze;
use App\VarantiejiRatai;
use App\PirmosRegSalis;
use App\KlimatoKontrole;

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
		$kebuloTipai = KebuloTipas::pluck('pavadinimas_lt', 'id');
		$spalvos = Spalva::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
		$kuroTipai = KuroTipas::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
		$pavaruDezes = PavaruDeze::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
		$varantiejiRatai = VarantiejiRatai::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
		$pirmosRegSalis = PirmosRegSalis::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
		$klimatoValdymas = KlimatoKontrole::pluck('pavadinimas_lt', 'id');

		foreach($models as $model){
			$model['pav'] = $model->pavadinimas .' '.$model->kita;
		}
		$modelis = $models->pluck('pav', 'id');

        return View::make('create', compact('markes', 'modelis', 'kebuloTipai', 'spalvos', 'kuroTipai', 'pavaruDezes', 'varantiejiRatai', 'pirmosRegSalis', 'klimatoValdymas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
		dd($request);
    }

	public function issaugotiMarke(Request $request){
		$marke = new Marke();
		$marke->pavadinimas = $request->input('naujaMarke');
		$marke->save();

		return response()->json($marke);
	}
	
	public function issaugotiModeli(Request $request){
		$modelis = new Modelis();
		$modelis->pavadinimas = $request->input('naujasModelis');
		$modelis->kita = $request->input('kita');
		$modelis->marke_id = $request->input('markesModelis');
		$modelis->save();

		return response()->json($modelis);
	}

	public function issaugotiSpalva(Request $request){
		$spalva = new Spalva();
		$spalva->pavadinimas_lt = $request->input('naujaSpalvaLt');
		$spalva->pavadinimas_ru = $request->input('naujaSpalvaRu');
		$spalva->pavadinimas_en = $request->input('naujaSpalvaEn');
		$spalva->save();

		return response()->json($spalva);
	}


	public function issaugotiPirmosRegSali(Request $request){
		$salis = new Spalva();
		$salis->pavadinimas_lt = $request->input('naujaSalisLt');
		$salis->pavadinimas_ru = $request->input('naujaSalisRu');
		$salis->pavadinimas_en = $request->input('naujaSalisEn');
		$salis->save();

		return response()->json($salis);
	}
}
