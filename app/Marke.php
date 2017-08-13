<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marke extends Model
{
    protected $table = 'marke';

    public function modelis()
	{
		return $this->hasOne('App\Modelis');
	}
}
