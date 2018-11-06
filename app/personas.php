<?php

namespace DoorSystem;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public static function add_person($id, $nombre, $apellidos) 
    {
    	$person = new personas;
    	$person->user_id = $id;
    	$person->nombre = $nombre;
    	$person->apellidos = $apellidos;
    	$person->ruta_foto_perfil = 'imagenes/fotos_perfil/Perfil.jpg';
    	$person->save();
    } 
}
