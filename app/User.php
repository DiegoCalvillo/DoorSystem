<?php

namespace DoorSystem;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Models\Role as Role;
use Auth;

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
        return $this->belongsTo(Role::class, 'user_type_id');
    }

    public function scopeAuthentication($query)
    {
        return $query->where('id', '!=', Auth::User()->id)->get();
    }
}
