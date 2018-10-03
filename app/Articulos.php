<?php

namespace DoorSystem;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    protected $table = 'articulos';

    public function familia()
    {
    	return $this->belongsTo(Familia::class, 'familia_id');
    }

    public function sub_familia()
    {
    	return $this->belongsTo(SubFamilia::class, 'sub_familia_id');
    }

}
