<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reciclausers;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Utilizado para mostrar la lista de los usuarios
        //return 'Hola Mundo nuevo';
        // variable = modelo::métodos
        $usuarios = reciclausers::all();
        return $usuarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Es para el formulario en el cual se ingresan los datos y crear el usuario
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //$Rules=['name'=>'required'];

        //$this->validate($request, $Rules);

        //$this->validate($request,['name' => 'required']);  

        //Crea un usuario
        $reciclausers = new reciclausers;
        $reciclausers -> email = $request -> email;
        $reciclausers -> password = $request -> password;
        $reciclausers -> status = $request -> status;
        $reciclausers -> name = $request -> name;
        $reciclausers -> perfilId = $request -> perfilId;
        $reciclausers -> save();
        return "Registro creado exitosamente";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Muestra solo un usuario
        //return $id;
        $usuario = reciclausers::find($id);
        return $usuario -> perfil;
        //return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Vista del formulario para actualizar un usuario
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualizar un usuario
        $reciclausers = reciclausers::find($id);
        $reciclausers -> fill($request->all());
        $reciclausers -> save();
        return $reciclausers;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar un usuario
        $reciclausers = reciclausers::find($id);
        $reciclausers -> delete();
        return "OK eliminado";
    }
}
