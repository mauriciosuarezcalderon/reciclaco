<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //Permite ponerle alias a los campos de la bd.
        return 
        [ "Codigo" => $this -> id,
          "Correo electronico" => $this -> email,
          "Nombre del usuario" => $this -> name
        ];
    }
}
