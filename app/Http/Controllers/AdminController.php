<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use View;
use LaravelLocalization;
use Carbon\Carbon;
use File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
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

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        LaravelLocalization::setLocale('lt');
        $aktyvus = Automobilis::visiAktyvus();

        return View::make('/admin', compact('aktyvus'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function upload(Request $request, $id){
        $file = Input::file('file');
        $destinationPath = 'images/'.$id;
        $filename = $file->getClientOriginalName();
        $upload_success = Input::file('file')->move($destinationPath, $filename);
        
        if($upload_success) {
           return Response::json('success', 200);
        } else {
           return Response::json('error', 400);
        }
    }

    public function uploadNew(Request $request){
        $file = Input::file('file');
        $destinationPath = 'images/temp/';
        // $success = File::deleteDirectory($destinationPath);
        $filename = $file->getClientOriginalName();
        $upload_success = Input::file('file')->move($destinationPath, $filename);
        
        if($upload_success) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }

    public function show($id){
        $auto = Automobilis::find($id);
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
        
        $nuotraukos = self::nuotraukos($id);

        foreach ($models as $model) {
            $model['pav'] = $model->pavadinimas .' '.$model->kita;
        }
        $modelis = $models->pluck('pav', 'id');

        return View::make('redaguoti', compact('markes', 'modelis', 'kebuloTipai', 'spalvos', 'kuroTipai',
        'pavaruDezes', 'varantiejiRatai', 'pirmosRegSalis', 'klimatoValdymas', 'apsaugaPriv', 'apsaugaPriv',
        'saugumasPriv', 'salonasPriv', 'eksterjerasPriv', 'kitaPriv', 'elektronikaPriv', 'avPriv', 'tiuningasPriv', 'auto', 'nuotraukos' ));
    }

    public function nuotraukos($id){
		$nuotraukos = array();
		foreach (glob(public_path().'/images/'.$id.'/*.jpg') as $file) {
			$nuotraukos[] = basename($file);
        }
        natsort($nuotraukos);

		return $nuotraukos;
	}

    public function istrintiFoto($id, $nuotrauka){
        $directory = public_path().'/images/'.$id.'/'.$nuotrauka;
        $success = File::delete($directory);
        return Redirect::back()->withInput(Input::all());
    }

    public function update(Request $request, $id)
    {
        $automobilis = Automobilis::find($id);
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
        $automobilis->kuro_san_mieste = $request->input('kuro_san_mieste');
        $automobilis->kuro_san_uzmiestyje = $request->input('kuro_san_uzmiestyje');
        $automobilis->kuro_san_bendrai = $request->input('kuro_san_bendrai');
        $automobilis->rida = $request->input('rida');
        $automobilis->galia_kw = $request->input('galia_kw');
        $automobilis->ratlankiai = $request->input('ratlankiai');
        $automobilis->kebulo_nr = $request->input('kebulo_nr');
        $automobilis->kaina = $request->input('kaina');
        $automobilis->komentaras_lt = $request->input('komentaras_lt');
        $automobilis->komentaras_ru = $request->input('komentaras_ru');
        $automobilis->komentaras_en = $request->input('komentaras_en');
		$automobilis->greitai = $request->input('greitai');
		$automobilis->darbinis_turis = $request->input('darbinis_turis');
        $automobilis->save();
        
		$automobilis->priv_apsauga()->sync($request->input('apsauga'));
		$automobilis->priv_saugumas()->sync($request->input('saugumas'));
        $automobilis->priv_salonas()->sync($request->input('salonas'));
		$automobilis->priv_eksterjeras()->sync($request->input('eksterjeras'));
		$automobilis->priv_av()->sync($request->input('av'));
		$automobilis->priv_elektronika()->sync($request->input('elektronika'));
		$automobilis->priv_tiuningas()->sync($request->input('tiuningas'));
		$automobilis->priv_kita()->sync($request->input('kita'));

        if(Input::hasFile('file')){
		    $files = Input::file('files');
		    self::issaugotiNuotraukas($files, $automobilis->id);
        }

		return redirect()->intended('admin');
    }

    public function destroy($id)
    {
        $auto = Automobilis::find($id);
        $auto->aktyvus = false;
        $auto->pardavimo_data = new Carbon();
        $auto->save();
        
        $directory = public_path().'/images/'.$id;
        $success = File::deleteDirectory($directory);
        return redirect()->intended('admin');
    }
    public function grizoILietuva($id)
    {
        $auto = Automobilis::find($id);
        $auto->greitai = false;
        $auto->save();

        return redirect()->intended('admin');
    }
}
