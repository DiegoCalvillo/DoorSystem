<?php

namespace DoorSystem\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Keygen;
use DoorSystem\User as User;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$usuarios = User::all();
    	return view('configuracion.usuarios.usuarios')->with('usuarios', $usuarios);
    }

    public function create()
    {
    	return view('configuracion.usuarios.usuarios_nuevo');
    }

    public function store(Request $request)
    {
    	$usuario = new User;
    	$usuario->name = $request->name;
    	$usuario->email = $request->email;
    	$usuario->estatus = 1;
    	$usuario->failed_login_count = 0;
    	$usuario->first_key = Keygen::numeric(8)->generate();
        $usuario->password = bcrypt($usuario->first_key);
    	$usuario->save();
    	Session::flash('message', 'El registro ha sido creado satisfactoriamente');
    	return redirect('/usuarios');
    }
}
