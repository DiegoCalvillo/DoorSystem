<?php

namespace DoorSystem\Http\Controllers;

use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    public function index()
    {
    	return view('configuracion.configuracion');
    }

    public function familias()
    {
    	return view('familias.familia');
    }
}
