<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'dcalvillo',
        	'email' => 'diegocalvillordz@gmail.com',
        	'password' => bcrypt('Geonosis'),
        	'created_at' => date('Y-m-d H:m:s'),
        	'updated_at' => date('Y-m-d H:m:s'),
        	'estatus' => 1,
        	'first_key' => Keygen::numeric(8)->generate(),
        	'failed_login_count' => 0,
        	'change_password' => 1,
        	'user_type_id' => 1,
        	'session_logins_count' => 0
        ]);
    }
}
