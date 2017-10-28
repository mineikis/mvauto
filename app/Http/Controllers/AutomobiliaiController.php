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
		$pageCount = self::totalPages(Automobilis::visiAktyvusLietuvoje()->count());
		$next = $puslapis + 1;
		$prev = $puslapis - 1;
		if($prev <= 0){
			$prev = 1;
		}
		if($next >= $pageCount){
			$next = $pageCount;
		}

		return View::make('automobiliai', compact('automobiliai', 'pageCount', 'next', 'prev'));
	}

	public function greitai($puslapis){
		$automobiliai = self::automobiliaiGreitaiPuslapiui($puslapis);
		$pageCount = self::totalPages(Automobilis::visiAktyvusGreitai()->count());
		$next = $puslapis + 1;
		$prev = $puslapis - 1;
		if($prev <= 0){
			$prev = 1;
		}
		if($next >= $pageCount){
			$next = $pageCount;
		}

		return View::make('greitai', compact('automobiliai', 'pageCount', 'next', 'prev'));
	}

	public function marke($pavadinimas){
		$isLocaleLt = self::isLocaleLt();
		$automobiliai = Automobilis::whereHas('modelis.marke', function ($q) use ($pavadinimas){
			$q->where('pavadinimas', 'like', '%'.$pavadinimas.'%');
		})
		->where('aktyvus', '1')
		->get();
		$pageCount = self::totalPages(Automobilis::visiAktyvus()->count());
		$next = -1;
		$prev = -1;
		
		return View::make('automobiliai', compact('automobiliai', 'isLocaleLt', 'pageCount', 'next', 'prev'));
	}

	public function modelis($pavadinimas){
		$automobiliai = Automobilis::whereHas('modelis', function ($q) use ($pavadinimas){
			$q->where('pavadinimas', 'like', '%'.$pavadinimas.'%');
		})
		->where('aktyvus', '1')
		->get();
		$pageCount = self::totalPages(Automobilis::visiAktyvus()->count());
		$next = -1;
		$prev = -1;
		
		return View::make('automobiliai', compact('automobiliai', 'pageCount', 'next', 'prev'));
	}

	public function kaina($kaina){
		if($kaina == 1){
			$automobiliai = Automobilis::where('kaina', '<=', '5000')->where('aktyvus', '1')->get();
		} else if($kaina == 2){
			$automobiliai = Automobilis::where('kaina', '>', '5000')->where('kaina', '<=', '10000')->where('aktyvus', '1')->get();
		} else if($kaina == 3){
			$automobiliai = Automobilis::where('kaina', '>', '10000')->where('kaina', '<=', '15000')->where('aktyvus', '1')->get();
		} else if($kaina == 4){
			$automobiliai = Automobilis::where('kaina', '>', '15000')->where('kaina', '<=', '20000')->where('aktyvus', '1')->get();
		} else {
			$automobiliai = Automobilis::where('kaina', '>', '20000')->where('aktyvus', '1')->get();
		}
		$pageCount = self::totalPages(Automobilis::visiAktyvus()->count());
		$next = -1;
		$prev = -1;
		
		return View::make('automobiliai', compact('automobiliai', 'pageCount', 'next', 'prev'));
	}

	public function standartas($standartas){
		if($standartas == 2){
			$automobiliai = Automobilis::where('standartas', 'like', 'euro2')->where('aktyvus', '1')->get();
		} else if($standartas == 3){
			$automobiliai = Automobilis::where('standartas', 'like', 'euro3')->where('aktyvus', '1')->get();
		} else if($standartas == 4){
			$automobiliai = Automobilis::where('standartas', 'like', 'euro4')->where('aktyvus', '1')->get();
		} else if($standartas == 5){
			$automobiliai = Automobilis::where('standartas', 'like', 'euro5')->where('aktyvus', '1')->get();
		} else {
			$automobiliai = Automobilis::where('aktyvus', '1')->get();
		}
		$pageCount = self::totalPages(Automobilis::visiAktyvus()->count());
		$next = -1;
		$prev = -1;
		
		return View::make('automobiliai', compact('automobiliai', 'pageCount', 'next', 'prev'));
	}

	public function metai($metai){
		$automobiliai = Automobilis::whereYear('pirmos_reg_data', '=', date($metai))
		->where('aktyvus', '1')
		->get();
		$pageCount = self::totalPages(Automobilis::visiAktyvus()->count());
		$next = -1;
		$prev = -1;
		
		return View::make('automobiliai', compact('automobiliai', 'pageCount', 'next', 'prev'));
	}

	public function automobiliaiPuslapiui($puslapis){
		if($puslapis == 1){
			$start = 0;
		} else {
			$start = ($puslapis - 1) * 9;
		}

		$automobiliai = Automobilis::most_expensive_lietuvoje_all()->slice($start, 9);
		return $automobiliai;
	}

	public function automobiliaiGreitaiPuslapiui($puslapis){
		if($puslapis == 1){
			$start = 0;
		} else {
			$start = ($puslapis - 1) * 9;
		}

		$automobiliai = Automobilis::most_expensive_greitai_all()->slice($start, 9);
		return $automobiliai;
	}

	public function isLocaleLt(){
		if(LaravelLocalization::getCurrentLocale() == 'lt'){
			return true;
		} else {
			return false;
		}
	}

	public function totalPages($count){
		return ceil($count/9);
	}
}
