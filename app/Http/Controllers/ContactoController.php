<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contacto;

class ContactoController extends Controller
{
    public function create(Request $request)
    {
 
        contacto::create($request->all());


        return redirect()->route('contacto')->with('info','contacto creado');


    }


      public function index()
    {
        $contacto = contacto::all();
        
        return view('contacto')->with('contacto',$contacto);
    }


       public function estadisticas()
    {

        return view('estadisticas');
    }


}
