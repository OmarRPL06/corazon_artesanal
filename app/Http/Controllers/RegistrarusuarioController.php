<?php

namespace App\Http\Controllers;
use App\Models\registrarusuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class RegistrarusuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=registrarusuario::all();
        return view('usuario.index', compact('usuarios'));
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
            'user'=>['required','string','min:5','max:15'],
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
            'user.required'=>'Es necesario un usuario',
            'user.min'=>'El tamaño minimo de tu usuario es de 10 caracteres',
            'user.max'=>'La longitud maxima de tu usuario es de 15 caracteres',
        ]);

        $registrarusuario = new registrarusuario;
        $registrarusuario->name=$request->input('nombre');
        $registrarusuario->apellidoPaterno=$request->input('apellido_Paterno');
        $registrarusuario->apellidoMaterno=$request->input('apellido_Materno');
        $registrarusuario->telefono=$request->input('telefono');
        $registrarusuario->email=$request->input('email');
        $registrarusuario->password=Hash::make($request->input('password'));
        $registrarusuario->user=$request->input('user');
        $registrarusuario->tipo='CLIENTE';
        $registrarusuario->save();
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
    public function edit($idUser)
    {
        $usuario=registrarusuario::finO0rFail($idUser);
        return view('Usuario.editUser',compact('usuario'));
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
