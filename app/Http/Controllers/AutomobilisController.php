<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use View;
use LaravelLocalization;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
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
use App\PrivApsauga;
use App\PrivSalonas;
use App\PrivSaugumas;
use App\PrivEksterjeras;
use App\PrivAv;
use App\PrivElektronika;
use App\PrivTiuningas;
use App\PrivKita;

class AutomobilisController extends Controller
{
    public function index($id){
        $automobilis = Automobilis::find($id);
        $nuotraukos = self::nuotraukos($id);
        $reklama = Automobilis::inRandomOrder()->where('aktyvus', '1')->take(3)->get();
        $arklioGalia = $automobilis->galia_kw / 0.73549875;
        
        return View::make('automobilis', compact('automobilis', 'nuotraukos', 'reklama', 'arklioGalia'));
    }

    public function create(){
        File::deleteDirectory('images/temp/');
        $markes = Marke::orderBy('pavadinimas')->pluck('pavadinimas', 'id');
        $models = Modelis::orderBy('pavadinimas')->select('pavadinimas', 'kita', 'id')->get();
        $kebuloTipai = KebuloTipas::pluck('pavadinimas_lt', 'id');
        $spalvos = Spalva::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $kuroTipai = KuroTipas::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $pavaruDezes = PavaruDeze::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $varantiejiRatai = VarantiejiRatai::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $pirmosRegSalis = PirmosRegSalis::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $klimatoValdymas = KlimatoKontrole::pluck('pavadinimas_lt', 'id');
        $apsaugaPriv = PrivApsauga::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $saugumasPriv = PrivSaugumas::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $salonasPriv = PrivSalonas::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $eksterjerasPriv = PrivEksterjeras::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $avPriv = PrivAv::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $elektronikaPriv = PrivElektronika::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $kitaPriv = PrivKita::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');
        $tiuningasPriv = PrivTiuningas::orderBy('pavadinimas_lt')->pluck('pavadinimas_lt', 'id');

        foreach ($models as $model) {
            $model['pav'] = $model->pavadinimas .' '.$model->kita;
        }
        $modelis = $models->pluck('pav', 'id');

        return View::make('create', compact('markes', 'modelis', 'kebuloTipai', 'spalvos', 'kuroTipai',
        'pavaruDezes', 'varantiejiRatai', 'pirmosRegSalis', 'klimatoValdymas', 'apsaugaPriv', 'apsaugaPriv',
        'saugumasPriv', 'salonasPriv', 'eksterjerasPriv', 'kitaPriv', 'elektronikaPriv', 'avPriv', 'tiuningasPriv' ));
    }

    public function store(Request $request)
    {
        $automobilis = new Automobilis();
        $automobilis->modelis_id = $request->input('modelis');
        $automobilis->pirmos_reg_data = Carbon::createFromDate($request->input('reg_metai'), $request->input('reg_menuo'), 01)->format('Y-m-d');
        $automobilis->spalva_id = $request->input('spalva');
        $automobilis->kebulo_tipas_id = $request->input('kebulo_tipas');
        $automobilis->pavaru_deze_id = $request->input('pavaru_deze');
        $automobilis->kuro_tipas_id = $request->input('kuro_tipas');
        $automobilis->pirmos_reg_salis_id = $request->input('pirmos_reg_salis');
        $automobilis->standartas = $request->input('euro_standartas');
        $automobilis->varantieji_ratai_id = $request->input('varantieji_ratai');
        $automobilis->klimato_valdymas_id = $request->input('klimato_valdymas');
        $automobilis->kuro_san_mieste = $request->input('mieste');
        $automobilis->kuro_san_uzmiestyje = $request->input('uzmiestyje');
        $automobilis->kuro_san_bendrai = $request->input('bendrai');
        $automobilis->rida = $request->input('rida');
        $automobilis->galia_kw = $request->input('galia');
        $automobilis->ratlankiai = $request->input('ratlankiai');
        $automobilis->kebulo_nr = $request->input('vin');
        $automobilis->kaina = $request->input('kaina');
        $automobilis->komentaras_lt = $request->input('komentaras_lt');
        $automobilis->komentaras_ru = $request->input('komentaras_ru');
        $automobilis->komentaras_en = $request->input('komentaras_en');
		$automobilis->greitai = $request->input('prancuzijoje');
		$automobilis->darbinis_turis = $request->input('darbinis_turis');
		$automobilis->save();
		
		$apsauga = $request->input('apsauga');
		if(!empty($apsauga)){
			foreach($apsauga as $id){
				$tl = PrivApsauga::find($id);
				$automobilis->priv_apsauga()->save($tl);
			}
		}

		$saugumas = $request->input('saugumas');
		if(!empty($saugumas)){
		foreach($saugumas as $id){
			$tl = PrivSaugumas::find($id);
			$automobilis->priv_saugumas()->save($tl);
		}
}
		$salonas = $request->input('salonas');
		if(!empty($salonas)){
		foreach($salonas as $id){
			$tl = PrivSalonas::find($id);
			$automobilis->priv_salonas()->save($tl);
		}
	}
		$eksterjeras = $request->input('eksterjeras');
		if(!empty($eksterjeras)){
		foreach($eksterjeras as $id){
			$tl = PrivEksterjeras::find($id);
			$automobilis->priv_eksterjeras()->save($tl);
		}
	}
		$av = $request->input('av');
		if(!empty($av)){
		foreach($av as $id){
			$tl = PrivAv::find($id);
			$automobilis->priv_av()->save($tl);
		}
	}

		$elektronika = $request->input('elektronika');
		if(!empty($elektronika)){
		foreach($elektronika as $id){
			$tl = PrivElektronika::find($id);
			$automobilis->priv_elektronika()->save($tl);
		}
	}

		$tiuningas = $request->input('tiuningas');
		if(!empty($tiuningas)){
		foreach($tiuningas as $id){
			$tl = PrivTiuningas::find($id);
			$automobilis->priv_tiuningas()->save($tl);
		}
	}

		$kita = $request->input('kita');
		if(!empty($kita)){
		foreach($kita as $id){
			$tl = PrivKita::find($id);
			$automobilis->priv_kita()->save($tl);
		}
	}

        if (file_exists('images/temp')){
            rename('images/temp', 'images/'.$automobilis->id);
        }
        
		return redirect()->intended('admin');
    }

    public function nuotraukos($id){
        $nuotraukos = array();
        foreach (glob(public_path().'/images/'.$id.'/*.jpg') as $file) {
            $nuotraukos[] = basename($file);
        }

        return $nuotraukos;
    }

    public function issaugotiNuotraukas($files, $id)
    {
        foreach ($files as $file) {
            $filename = $file->getClientOriginalName();
            Storage::disk('public')->put($id.'/', $file);
			$file->move(public_path('images/'.$id.'/'), $filename);
        }
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
