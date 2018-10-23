<?php

namespace DoorSystem;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
