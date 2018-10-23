<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reciclacomentario extends Model
{
    //
    protect $table = 'reciclacomentario';
    protect $fillable = ['usuId','calificacion'];
}
