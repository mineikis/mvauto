<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use LaravelLocalization;

class AutomobilisController extends Controller
{
	public function index($id){

		return View::make('automobilis');
	}
}
