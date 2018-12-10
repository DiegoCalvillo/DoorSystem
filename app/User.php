<?php

namespace DoorSystem;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'first_key',
    ];

    public static function nombre()
    {
        
    }

    public function perfil()
    {
        return $this->belongsTo(Perfiles::class, 'user_type_id');
    }
}
