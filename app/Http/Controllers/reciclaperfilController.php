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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reciclaperfil  $reciclaperfil
     * @return \Illuminate\Http\Response
     */
    public function show(reciclaperfil $reciclaperfil)
    {
        //
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
