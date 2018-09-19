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
    	return view('sub_familias.sub_familia_nuevo')->with('familia', $familia);
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
        return view('sub_familias.sub_familia_perfil')->with('sub_familia', $sub_familia);
    }

    public function destroy($id)
    {
        $sub_familia = SubFamilia::find($id);
        $familia = $sub_familia->familia_id;
        $sub_familia->delete();
        return redirect('familias/'.$familia);
    }
}
