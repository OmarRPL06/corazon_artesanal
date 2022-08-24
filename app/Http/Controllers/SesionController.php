<?php

namespace App\Http\Controllers;

use App\Models\registrarusuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class SesionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('usuario.Login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
        return redirect("login")->withErrors(['message'=>'Tus datos son incorrectos, Intentalo de nuevo']);
    }

    public function show(Request $sesion)
    {
        //
    }

    public function edit(Request $sesion)
    {
        //
    }

    public function update(Request $request, Request $sesion)
    {
        //
    }

    public function destroy(Request $sesion)
    {
        //
    }

    public function loginApi(Request $request){
        if(Auth::guard('api')->attempt(['email' => $request->input('u'), 'password' => $request->input('p')])){
            return '{"Respuesta": "Usuario aceptado"}';
        }
        return '{"Respuesta": "Usuario no valido"}';

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
