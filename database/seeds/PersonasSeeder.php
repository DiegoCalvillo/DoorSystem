<?php

use Illuminate\Database\Seeder;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
        	'nombre' => 'Diego Alberto',
        	'apellidos' => 'Calvillo Rodriguez',
        	'user_id' => 1,
        	'ruta_foto_perfil' => 'imagenes/fotos_perfil/Perfil.jpg'
        ]);
    }
}
