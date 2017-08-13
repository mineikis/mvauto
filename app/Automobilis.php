<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobilis extends Model
{

	public static function brangiausias(){
    	return $this->orderBy('kaina', 'desc')->get()->first();
    }
    public function skelbimai(){
    	return $this->hasMany(Skelbimas::class);
    }
    
}
