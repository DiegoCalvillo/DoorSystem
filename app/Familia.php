<?php

namespace DoorSystem;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    public function sub_familias()
    {
    	return $this->hasMany(SubFamilia::class);
    }

    public static function habilitado()
    {
    	return Familia::where('estatus', '=', true)->get();
    }
}
