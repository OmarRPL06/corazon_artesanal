<?php

//namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\registrarusuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
//use Auth;

class SesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.Login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
        return redirect("login")->withErrors(['message'=>'Tus datos son incorrectos, Intentalo de nuevo']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $sesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $sesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Request $sesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sesion  $sesion
     * @return \Illuminate\Http\Response
     */
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
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect('/');
    }
}
