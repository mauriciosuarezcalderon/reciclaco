<?php

namespace App\Http\Controllers;

use App\reciclaperfil;
use Illuminate\Http\Request;

class reciclaperfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $perfil = reciclaperfil::all();
        return $perfil;
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
        $reciclaperfil = new reciclaperfil;
        $reciclaperfil -> perfil = $request -> perfil;
        $reciclaperfil -> status = $request -> status;
        $reciclaperfil -> save();
        return "Registro creado exitosamente";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reciclaperfil  $reciclaperfil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $perfil = reciclaperfil::find($id);
        //return $perfil -> usuarios;
        //return $perfil -> usuarios -> first()->email;
        //return $perfil -> usuarios -> pluck('email');
        //return $perfil -> usuarios -> where ('id','0','1');
        return $perfil -> usuarios -> forPage(1, 3);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reciclaperfil  $reciclaperfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reciclaperfil $reciclaperfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reciclaperfil  $reciclaperfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(reciclaperfil $reciclaperfil)
    {
        //
    }
}
