<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localizacion extends Model
{
    protected $fillable = ['titulo','direccion','telefono','correo','encargado','cargo','latitud','longitud'];
}
