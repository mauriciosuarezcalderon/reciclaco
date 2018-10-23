<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reciclausers extends Model
{
    //
    protected $table = 'reciclausers';
    protected $fillable =['email','password', 'status', 'name', 'perfilId'];
}
