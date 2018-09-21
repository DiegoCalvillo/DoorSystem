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
        $familias = Familia::paginate(5);
    	return view('configuracion.familias.familia')->with('familias', $familias);
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
        #$sub_familias = $familia->sub_familias;
        $sub_familias = SubFamilia::where('familia_id', '=', $familia->id)->paginate(5);
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

    public function edit($id)
    {
        $familia = Familia::find($id);
        return view('configuracion.familias.familia_editar')->with('familia', $familia);
    }

    public function update(Request $request)
    {
        $familia = Familia::find($request->id);
        $familia->nombre_familia = $request->nombre_familia;
        $familia->estatus = $request->estatus;
        $familia->save();
        Session::flash('message', 'El registro ha sido actualizado exitosamente');
        return redirect('/familias/'.$familia->id);
    }
}
