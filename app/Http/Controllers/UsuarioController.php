<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = registrarusuario::all();
        return view('usuario.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuario.RegistrarUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, [
                'nombre' => ['required'],
                'apellido_paterno' => ['required'],
                'apellido_materno' => ['required'],
                'telefono' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
                'password_verify' => ['required', 'string', 'min:8'],
            ],
            [
                'nombre.required' => 'Escribe tu nombre solo letras no se aceptan numeros',
                'apellido_Paterno.required' => 'Escribe su apellido correctamente sin numero y simbolos especiales',
                'apellido_Materno.required' => 'Escribe tu segundo apellido sin numeros ni simbolos especiales',
                'telefono.required' => 'Escribe tu numero de telefono',
                'email.required' => 'Debes ingresar tu direccion de correo electronico',
                'email.email' => 'La direccion de correo electronico no es valido',
                'email.unique' => 'La direccion de correo ya existe, escribe otra distinta',
                'password.required' => 'Debes ingresar la contraseña de la cuenta',
                'password.min' => 'Debes ingresar una contraseña minino de 8 caracteres',
                'password_verify' => 'Repite su constraseña'
            ]
        );

        if($request->input('password') == $request->input('password_verify')) {

            $user = new User();
            $user->name = $request->input('nombre');
            $user->apellidoPaterno = $request->input('apellido_paterno');
            $user->apellidoMaterno = $request->input('apellido_materno');
            $user->telefono = $request->input('telefono');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->tipo = 'CLIENTE';
            $user->save();
            if ($request->input('root')) {
                return redirect()
                    ->back()
                    ->withSuccess('Se registró un nuevo usuario');
            } else {
                return redirect('/login');
            }

        }else{
            return redirect()
                ->back()
                ->withSuccess('No coincide la repetición de la contraseña, escribe correctamente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        $usuario = registrarusuario::finO0rFail($idUser);
        return view('Usuario.editUser', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
