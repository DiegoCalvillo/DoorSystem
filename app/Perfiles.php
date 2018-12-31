<?php

namespace DoorSystem;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    public function scopeHabilitado($query)
    {
    	return $query->where('estatus', '=', true)->get();
    }

    public function users()
    {
    	return $this->hasMany(User::class, 'user_type_id');
    }

}
