<?php

namespace DoorSystem\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Keygen;
use DoorSystem\User as User;
use DoorSystem\personas as personas;

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
        $usuario->change_password = false;
        $usuario->user_type_id = 1;
        $usuario->session_logins_count = 0;
    	$usuario->save();
        personas::add_person($usuario->id, $request->nombre, $request->apellidos);
    	Session::flash('message', 'El registro ha sido creado satisfactoriamente');
    	return redirect('/usuarios');
    }

    public function cambiar_contraseña($id)
    {
        $usuario = User::find($id);
        return view('configuracion.usuarios.usuarios_cambio_contrasena')->with('usuario', $usuario);
    }

    public function cambio_contrasena_store(Request $request)
    {
        $usuario = User::find($request->id);
        $usuario->password = bcrypt($request->password);
        $usuario->change_password = true;
        $usuario->save();
        Session::flash('message', 'Tu contraseña ha sido cambiada exitosamente');
        return redirect('/');
    }
}
