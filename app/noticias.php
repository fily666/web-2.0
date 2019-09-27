<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticias extends Model
{
    protected $fillable = ['titulo','periodista','lugar','persona','material','email','adjunto','observaciones'];
}
