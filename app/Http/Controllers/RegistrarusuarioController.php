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
        //
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
