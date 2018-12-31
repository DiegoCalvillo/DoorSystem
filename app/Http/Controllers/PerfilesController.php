<?php

namespace DoorSystem\Http\Controllers;

use Illuminate\Http\Request;
use DoorSystem\Perfiles as Perfiles;
use Spatie\Permission\Models\Role as Role;
use Session;

class PerfilesController extends Controller
{
    public function index()
    {
    	$perfiles = Role::all();
    	return view('configuracion.perfiles.perfiles')->with('perfiles', $perfiles);
    }

    public function create()
    {
    	return view('configuracion.perfiles.perfiles_nuevo');
    }

    public function store(Request $request)
    {
    	$perfil = new Role;
    	$perfil->name = $request->nombre_perfil;
    	$perfil->estatus = $request->estatus;
    	$perfil->save();
    	Session::flash('message', 'El registro ha sido creado exitosamente');
    	return redirect('/perfiles');
    }

    public function show($id)
    {
    	$perfil = Role::find($id);
    	return view('configuracion.perfiles.perfiles_perfil')->with('perfil', $perfil);
    }

    public function edit($id)
    {
    	$perfil = Role::find($id);
    	return view('configuracion.perfiles.perfiles_editar')->with('perfil', $perfil);
    }

    public function update(Request $request)
    {
    	$perfil = Role::find($request->id);
    	$perfil->name = $request->nombre_perfil;
    	$perfil->estatus = $request->estatus;
    	$perfil->save();
    	Session::flash('message', 'El registro ha sido actualizado exitosamente');
    	return redirect('/perfiles/'.$perfil->id);
    }

    public function destroy($id)
    {
        $perfil = Role::find($id);
        if($perfil->users->count() == 0)  {
            $perfil->delete();
            Session::flash('message', 'El registro ha sido eliminado exitosamente');
            return redirect('/perfiles');
        } else {
            Session::flash('message-error', 'No se puede eliminar el perfil puesto que hay usuarios asociados');
            return redirect('/perfiles/'.$perfil->id);
        }
    }
}
