<?php

namespace DoorSystem\Http\Controllers;

use Illuminate\Http\Request;
use DoorSystem\Perfiles as Perfiles;
use Session;

class PerfilesController extends Controller
{
    public function index()
    {
    	$perfiles = Perfiles::all();
    	return view('configuracion.perfiles.perfiles')->with('perfiles', $perfiles);
    }

    public function create()
    {
    	return view('configuracion.perfiles.perfiles_nuevo');
    }

    public function store(Request $request)
    {
    	$perfil = new Perfiles;
    	$perfil->nombre_perfil = $request->nombre_perfil;
    	$perfil->estatus = $request->estatus;
    	$perfil->save();
    	Session::flash('message', 'El registro ha sido creado exitosamente');
    	return redirect('/perfiles');
    }

    public function show($id)
    {
    	$perfil = Perfiles::find($id);
    	return view('configuracion.perfiles.perfiles_perfil')->with('perfil', $perfil);
    }

    public function edit($id)
    {
    	$perfil = Perfiles::find($id);
    	return view('configuracion.perfiles.perfiles_editar')->with('perfil', $perfil);
    }

    public function update(Request $request)
    {
    	$perfil = Perfiles::find($request->id);
    	$perfil->nombre_perfil = $request->nombre_perfil;
    	$perfil->estatus = $request->estatus;
    	$perfil->save();
    	Session::flash('message', 'El registro ha sido actualizado exitosamente');
    	return redirect('/perfiles/'.$perfil->id);
    }
}
