<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelLocalization;
use App\Automobilis;
use View;

class KontaktaiController extends Controller
{
	public function index(){
		$reklama = Automobilis::inRandomOrder()->where('aktyvus', '1')->take(3)->get();
		
		return View::make('/kontaktai', compact('reklama'));
	}
}
