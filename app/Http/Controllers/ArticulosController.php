<?php

namespace DoorSystem\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DoorSystem\Articulos as Articulos;
use DoorSystem\Familia as Familia;
use DoorSystem\Http\Requests\ArticulosCreateRequest;

class ArticulosController extends Controller
{
    public function index() 
    {   
        $familias = Familia::habilitado()->pluck('nombre_familia', 'id');
    	$articulos = Articulos::all();
    	if ($articulos->count() == 0) 
    	{
    		Session::flash('message-warning', 'Sin registros');
    	}
    	return view('articulos.articulos')->with('articulos', $articulos)->with('familias', $familias);
    }

    public function create()
    {
        $familias = Familia::habilitado()->pluck('nombre_familia', 'id');
    	return view('articulos.articulos_nuevo')->with('familias', $familias);
    }

    public function store(ArticulosCreateRequest $request)
    {
        $articulo = new Articulos;
        $articulo->familia_id = $request->familia_id;
        $articulo->sub_familia_id = $request->sub_familia_id;
        $articulo->dado = $request->dado;
        $articulo->descripcion = $request->descripcion;
        $articulo->largo = $request->largo;
        $articulo->BL = $request->BL;
        $articulo->NG = $request->NG;
        $articulo->HU = $request->HU;
        $articulo->B3 = $request->B3;
        $articulo->B5 = $request->B5;
        $articulo->CH = $request->CH;
        $articulo->BR = $request->BR;
        $articulo->save();
        Session::flash('message', 'El registro ha sido creado satisfactoriamente');
        return redirect('/articulos/'.$articulo->id);
    }

    public function show($id)
    {
        $articulo = Articulos::find($id);
        return view('articulos.articulos_perfil')->with('articulo', $articulo);
    }

    public function edit($id)
    {
        $articulo = Articulos::find($id);
        $familias = Familia::habilitado()->pluck('nombre_familia', 'id');
        return view('articulos.articulos_editar')->with('articulo', $articulo)->with('familias', $familias);
    }

    public function update(Request $request)
    {
        $articulo = Articulos::find($request->id);
        $articulo->familia_id = $request->familia_id;
        $articulo->sub_familia_id = $request->sub_familia_id;
        $articulo->dado = $request->dado;
        $articulo->descripcion = $request->descripcion;
        $articulo->largo = $request->largo;
        $articulo->BL = $request->BL;
        $articulo->NG = $request->NG;
        $articulo->HU = $request->HU;
        $articulo->B3 = $request->B3;
        $articulo->B5 = $request->B5;
        $articulo->CH = $request->CH;
        $articulo->BR = $request->BR;
        $articulo->save();
        Session::flash('message', 'El registro ha sido actualizado satisfactoriamente');
        return redirect('/articulos/'.$articulo->id);
    }

    public function getArticulos(Request $request, $id_familia, $id_subfamilia)
    {
        if($request->ajax()) {
            $articulos = Articulos::familias($id_familia);
            if($id_subfamilia != 0) {
                $articulos = $articulos->where('sub_familia_id', '=', $id_subfamilia);
            }
            return response()->json($articulos->toArray());
        }
    }
}
