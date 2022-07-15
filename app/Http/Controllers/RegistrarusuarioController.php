<?php

namespace App\Http\Controllers;

use App\Models\registrarusuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrarusuarioController extends Controller
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
        return view("Usuario.ResgistrarUser");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => ['required'],
            'apellido_Paterno'=>['required'],
            'apellido_Materno'=>['required'],
            'telefono'=>['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required','string','min:8'],
            'usuario'=>['required','string','min:10','max:15'],
            'tipo' => ['required'],
        ],[
            'nombre.required' => 'Escribe tu nombre solo letras no se aceptan numeros OK',
            'apellido_Paterno.required'=>'Escribe su apellido correctamente sin numero y simbolos especiales',
            'apellido_Materno.riquered'=>'Escribe tu segundo apellido sin numeros ni simbolos especiales',
            'telefono.required'=>'Dijite su numero de telefono',
            'email.required' => 'Debes ingresar tu direccion de correo electronico',
            'email.email' => 'La direccion de correo electronico no es valido',
            'email.unique' => 'La direccion de correo ya existe con otro usuario',
            'password.required'=>'Debes ingresar la contraseña de la cuenta',
            'password.min' => 'Debes ingresar una contraseña minino de 8 caracteres',
            'usuario.required'=>'Es necesario un usuario',
            'usuario.min'=>'El tamaño minimo de tu usario es de 10 caracteres',
            'usuario.max'=>'La longitud minima de tu usuario es de 15 caracteres',
            'tipo.required' => 'Debes seleccionar el tipo de usuario'
        ]);
        $usuario = new usuario;
        $usuario->name=$request->input('nombre');
        $usuario->apellido_Paterno=$request->input('apellido_Paterno');
        $usuario->apellido_Materno=$request->input('apellido_Materno');
        $usuario->telefono->$request->input('telefono');
        $usuario->email=$request->input('email');
        $usuario->password=Hash::make($request->input('password'));
        $usuario->usuario=$request->input('usuario');
        $usuario->tipo=$request->input('tipo');
        $usuario->save();

        if($request->input('root')){

            return redirect()->back()->withSuccess('Se registró un nuevo usuario');

        }else{

            return redirect("/login");

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registrarusuario  $registrarusuario
     * @return \Illuminate\Http\Response
     */
    public function show(registrarusuario $registrarusuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registrarusuario  $registrarusuario
     * @return \Illuminate\Http\Response
     */
    public function edit(registrarusuario $registrarusuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registrarusuario  $registrarusuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registrarusuario $registrarusuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registrarusuario  $registrarusuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(registrarusuario $registrarusuario)
    {
        //
    }
}
