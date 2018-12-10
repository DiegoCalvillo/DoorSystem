<?php

namespace DoorSystem;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    public function scopeHabilitado($query)
    {
    	return $query->where('estatus', '=', true)->get();
    }
}
