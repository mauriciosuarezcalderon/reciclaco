<?php

namespace App\Http\Controllers;

use App\reciclastatus;
use Illuminate\Http\Request;

class reciclarstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estados = reciclastatus::all();
        return $estados;
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
     * @param  \App\reciclastatus  $reciclastatus
     * @return \Illuminate\Http\Response
     */
    public function show(reciclastatus $reciclastatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reciclastatus  $reciclastatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reciclastatus $reciclastatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reciclastatus  $reciclastatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(reciclastatus $reciclastatus)
    {
        //
    }
}
