<?php

namespace DoorSystem\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DoorSystem\SubFamilia as SubFamilia;
use DoorSystem\Familia as Familia;
use DoorSystem\Http\Requests\SubFamiliaNuevoRequest;

class SubFamiliaController extends Controller
{
    public function create($id)
    {
    	$familia = Familia::find($id);
    	return view('configuracion.sub_familias.sub_familia_nuevo')->with('familia', $familia);
    }

    public function store(SubFamiliaNuevoRequest $request)
    {
    	$sub_familia = new SubFamilia;
    	$sub_familia->nombre_sub_familia = $request->nombre_sub_familia;
    	$sub_familia->familia_id = $request->id;
    	$sub_familia->save();
    	return redirect('familias/'.$request->id);
    }

    public function show($id)
    {
        $sub_familia = SubFamilia::find($id);
        return view('configuracion.sub_familias.sub_familia_perfil')->with('sub_familia', $sub_familia);
    }

    public function destroy($id)
    {
        $sub_familia = SubFamilia::find($id);
        $familia = $sub_familia->familia_id;
        $sub_familia->delete();
        return redirect('familias/'.$familia);
    }

    public function edit($id)
    {
        $sub_familia = SubFamilia::find($id);
        return view('configuracion.sub_familias.sub_familia_editar')->with('sub_familia', $sub_familia);
    }

    public function update(Request $request)
    {
        $sub_familia = SubFamilia::find($request->id);
        $sub_familia->nombre_sub_familia = $request->nombre_sub_familia;
        $sub_familia->estatus = $request->estatus;
        $sub_familia->save();
        Session::flash('message', 'El registro ha sido actualizado exitosamente');
        return redirect('sub_familia/'.$sub_familia->id);
    }

    public function getSubFamilias(Request $request, $id)
    {
        if($request->ajax())
        {
            $sub_familias = SubFamilia::where('familia_id', '=', $id)->get();
            return response()->json($sub_familias);
        }
    }
}
