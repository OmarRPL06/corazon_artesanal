<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Productos::orderBy('created_at')->get();

        return view('index', ['producto' => $productos]);
    }

    public function miProducto()
    {
        $productos = Productos::orderBy('created_at')->get();

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
                'tipo' => 'required',
                'modelo' => 'required',
                'existencia' => 'required',
                'talla' => 'required',
                'color' => 'required',
                'precio' => 'required',
                'iva' => 'required',
                'img' => 'required|image',
            ],
            [
                'nombre_producto.required' => 'Debe de agregar el nombre del producto',
                'tipo.required' => 'Debe de agregar el tipo de producto',
                'modelo.required' => 'Ingrese el modelo del producto',
                'existencia.required' => 'Ingrese la existencia del producto',
                'talla.required' => 'Ingrese la talla',
                'color.required' => 'Ingrese el color',
                'precio.required' => 'Ingrese el precio del producto',
                'iva.required' => 'Ingrese la iva del producto',
                'img.required' => 'Debe de subir la imagen del producto en el formato correcto',
                'img.image' => 'No se permiten archivos de otro formato',
            ],
        );

        $image = $request->file('img');
        $image->move('uploads', $image->getClientOriginalName());

        $producto = new Productos();
        $producto->idUser = auth()->user()->id;
        $producto->nombreProducto = $request->input('nombre_producto');
        $producto->tipo = $request->input('tipo');
        $producto->modelo = $request->input('modelo');
        $producto->existencia = $request->input('existencia');
        $producto->talla = $request->input('talla');
        $producto->color = $request->input('color');
        $producto->precio = $request->input('precio');
        $producto->iva = $request->input('iva');
        $producto->img = $image->getClientOriginalName();
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
