<?php

namespace DoorSystem\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DoorSystem\Familia as Familia;
use DoorSystem\SubFamilia as SubFamilia;
use DoorSystem\Http\Requests\FamiliaNuevoRequest;

class FamiliaController extends Controller
{
    public function index()
    {
    	$familia = Familia::all();
    	return view('configuracion.familias.familia')->with('familia', $familia);
    }

    public function create()
    {
    	return view('configuracion.familias.familia_nuevo');
    }

    public function store(FamiliaNuevoRequest $request)
    {
    	$familia = new Familia;
    	$familia->nombre_familia = $request->nombre_familia;
    	$familia->save();
        Session::flash('message', 'El registro se ha creado correctamente');
    	return redirect('/familias/'.$familia->id);
    }

    public function show($id)
    {
    	$familia = Familia::find($id);
        $sub_familias = $familia->sub_familias;
    	return view('configuracion.familias.familia_perfil')->with('familia', $familia)->with('sub_familias', $sub_familias);
    }

    public function destroy($id)
    {
        $familia = Familia::find($id);
        if ($familia->sub_familias->count() > 0) {
            $sub_familias = $familia->sub_familias;
            SubFamilia::borrar_sub_familias($sub_familias);
        }   
        $familia->delete();
        Session::flash('message', 'El registro ha sido eliminado exitosamente');
        return redirect('/familias');
    }
}
