<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reciclaperfil extends Model
{
    //
    protected $table = 'reciclaperfils';
    protected $fillable =['perfil', 'status'];
    
    // Con el perfil se quiere traer los usuarios asociados al mismo.
    public function usuarios()
    {
    	return $this->hasMany(reciclausers::class, 'perfilId', 'id');
    	// nombre del modelo con el que se relaciona, llave foranea, llave de la tabla.
    }
}
