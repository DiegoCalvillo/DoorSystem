<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DoorSystem\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Lista de permisos
        //Permission::create(['name' => 'familias.index']);
        //Permission::create(['name' => 'familias.edit']);
        //Permission::create(['name' => 'familias.create']);

        //Admin
        //$admin = Role::create(['name' => 'Administrador']);

        //$admin->givePermissionTo([
        //	'familias.index',
        //	'familias.edit',
       // 	'familias.create'
        //]);

        $user = User::find(1);
        $user->assignRole('Administrador');
    }
}
