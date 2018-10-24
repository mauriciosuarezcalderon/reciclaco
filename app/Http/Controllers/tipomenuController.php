<?php

namespace App\Http\Controllers;

use App\reciclatipomenus;
use Illuminate\Http\Request;

class tipomenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipomen = reciclatipomenus::all();
        return $tipomen;
        //Prueba de cambio
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
     * @param  \App\reciclatipomenus  $reciclatipomenus
     * @return \Illuminate\Http\Response
     */
    public function show(reciclatipomenus $reciclatipomenus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reciclatipomenus  $reciclatipomenus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reciclatipomenus $reciclatipomenus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reciclatipomenus  $reciclatipomenus
     * @return \Illuminate\Http\Response
     */
    public function destroy(reciclatipomenus $reciclatipomenus)
    {
        //
    }
}
