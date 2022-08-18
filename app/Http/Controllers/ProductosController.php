<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::orderBy('created_at')->get();

        // dd($productos);

        return view('welcome', ['producto' => $productos]);
    }

    public function miProducto()
    {
        $productos = Productos::orderBy('created_at')->get();

        // dd($productos);

        return view('Productos.ConsultarProducto', ['producto' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Productos.RegistrarProducto");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'idUser'   => 'required',
            'nombre_producto'   => 'required',
            'tipo'              => 'required',
            'modelo'            => 'required',
            'existencia'        => 'required',
            'talla'             => 'required',
            'color'             => 'required',
            'precio'            => 'required',
            'iva'               => 'required',
            'img'               => 'required|image',
        ],[
            'idUser.required'           => 'Tiene que tener una cuenta para poder registrar',
            'nombre_producto.required'  => 'Debe de agregar el nombre del producto',
            'tipo.required'             => 'Debe de agregar el tipo de producto',
            'modelo.required'           => 'Ingrese el modelo del producto',
            'existencia.required'       => 'Ingrese la existencia del producto',
            'talla.required'            => 'Ingrese la talla',
            'color.required'            => 'Ingrese el color',
            'precio.required'           => 'Ingrese el precio del producto',
            'iva.required'              => 'Ingrese la iva del producto',
            'img.required'              => 'Debe de subir la imagen del producto en el formato correcto',
            'img.image'                 => 'No se permiten archivos de otro formato',
        ]);

        $image = $request->file('img');
        $image->move('uploads', $image->getClientOriginalName());

        $producto = new Productos;
        $producto->idUser=$request->input('idUser');
        $producto->nombreProducto=$request->input('nombre_producto');
        $producto->tipo=$request->input('tipo');
        $producto->modelo=$request->input('modelo');
        $producto->existencia=$request->input('existencia');
        $producto->talla=$request->input('talla');
        $producto->color=$request->input('color');
        $producto->precio=$request->input('precio');
        $producto->iva=$request->input('iva');
        $producto->img=$image->getClientOriginalName();
        $producto->save();

        return redirect('/consultar/producto/db/orpl');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        //
    }

    public function listApi() {

        $productos = Productos::all();

        return $productos;
    }
}
