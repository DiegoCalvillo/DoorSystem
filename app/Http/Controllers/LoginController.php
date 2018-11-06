<?php

namespace DoorSystem\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use DoorSystem\User as User;

class LoginController extends Controller
{
    public function index()
    {
    	return view('auth.login');
    }

    public function logout()
    {
        if(Auth::User()->change_password == 0) {
            $user = User::find(Auth::User()->id);
            $user->estatus = false;
            $user->save();
        }
    	Auth::logout();
    	return Redirect::to('/login');
    }

    public function store(Request $request)
    {
    	if(Auth::attempt(['name' => $request['name'], 'password' => $request['password']])) {
            $user = User::find(Auth::User()->id);
            $logins_count = $user->session_logins_count;
            if($user->estatus == true) {
                $logins_count += 1;
                $user->session_logins_count = $logins_count;
                $user->save();
                return Redirect::to('/');
            } else {
                Session::flash('message-error', 'Cuenta bloqueada');
                Auth::logout();
                return Redirect::to('/login');
            }
    	}
    	Session::flash('message-error', 'Acceso denegado');
    	return Redirect::to('/login');
    }
}
