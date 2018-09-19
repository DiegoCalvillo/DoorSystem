<?php

namespace DoorSystem;

use Illuminate\Database\Eloquent\Model;

class SubFamilia extends Model
{
    public function familia()
    {
    	return $this->belongsTo(Familia::class);
    }

    public static function borrar_sub_familias($sub_familias) {
    	foreach($sub_familias as $sub_familia) {
    		$x = SubFamilia::find($sub_familia->id);
    		$x->delete();
    	}
    }
}
