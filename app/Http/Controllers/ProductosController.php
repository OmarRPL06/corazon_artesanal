<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Productos::orderBy('created_at', 'DESC')->get();

        return view('index', ['producto' => $productos]);
    }

    public function miProducto()
    {
        $productos = Productos::orderBy('created_at', 'DESC')->get()->where('idUser', auth()->user()->id);

        return view('Productos.ConsultarProducto', ['producto' => $productos]);
    }

    public function create()
    {
        return view('Productos.RegistrarProducto');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nombre_producto' => 'required',
                'precio' => 'required',
                'categoria' => 'required',
                'marca' => 'required',
                'modelo' => 'required',
                'existencia' => 'required',
                'img' => 'required|image',
                'descripcion' => 'required',
            ],
            [
                'nombre_producto.required' => 'Debe de agregar el nombre del producto',
                'precio.required' => 'Ingrese el precio del producto',
                'categoria.required' => 'Seleccione la categoría de su producto',
                'marca.required'=>'Dede de agregar la marca de su producto',
                'modelo.required' => 'Dede de ingresar el modelo del producto',
                'existencia.required' => 'Ingrese la existencia del producto',
                'img.required' => 'Debe de subir la imagen del producto en el formato correcto',
                'img.image' => 'No se permiten archivos de otro formato',

            ],
        );

        $image = $request->file('img');
        $image->move('uploads', $image->getClientOriginalName());

        $producto = new Productos();
        $producto->idUser = auth()->user()->id;
        $producto->nombreProducto = $request->input('nombre_producto');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->marca = $request->input('marca');
        $producto->modelo = $request->input('modelo');
        $producto->existencia = $request->input('existencia');
        $producto->img = $image->getClientOriginalName();
        $producto->descripcion = $request->input('descripcion');
        $producto->save();

        return redirect('/consultar/producto/db/orpl');
    }

    public function show(Request $productos)
    {
        //
    }

    public function edit(Request $productos)
    {
        //
    }

    public function update(Request $request, Productos $productos)
    {
        //
    }

    public function destroy($id)
    {
        $producto = Productos::find($id);

        unlink("uploads/$producto->img");

        $producto->delete($producto);

        return redirect('/consultar/producto/db/orpl');
    }
}
