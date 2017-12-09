<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelLocalization;
use App\Automobilis;
use App\Mail\Enquiry;
use View;
use Mail;

class KontaktaiController extends Controller
{
	public function index(){
		$reklama = Automobilis::inRandomOrder()->where('aktyvus', '1')->take(3)->get();

		return View::make('/kontaktai', compact('reklama'));
	}

	    public function send(Request $request){
			$name = $request->input('name');
			$phonenumber = $request->input('phonenumber');
			$email = $request->input('email');
			$message = $request->input('message');
			Mail::to('mvauto777@gmail.com')
		 	->send(new Enquiry($name, $phonenumber, $email, $message));
		
			if (Mail::failures()) {
				return response()->json('error', 200);
			}
			
			return response()->json(['return' => 'success']);
		}
}
