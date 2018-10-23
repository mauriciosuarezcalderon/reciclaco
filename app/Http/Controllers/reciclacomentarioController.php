<?php

namespace App\Http\Controllers;

use App\reciclacomentario;
use Illuminate\Http\Request;

class reciclacomentarioController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $reciclacomentarios = new reciclacomentarios;
        $reciclacomentarios -> usuaId = $ reciclacomentarios -> usuaId;
        $reciclacomentarios -> calificacion = $ reciclacomentarios -> calificacion;
        $reciclacomentarios -> save();
        return "Registro creado exitosamente";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reciclacomentario  $reciclacomentario
     * @return \Illuminate\Http\Response
     */
    public function show(reciclacomentario $reciclacomentario)
    {
        //
        return $reciclacomentario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reciclacomentario  $reciclacomentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reciclacomentario $reciclacomentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reciclacomentario  $reciclacomentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(reciclacomentario $reciclacomentario)
    {
        //
    }
}
