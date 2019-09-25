<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    protected $fillable = ['name','identificacion','number','sexo','fecha','email','novedades'];

}
