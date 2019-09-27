<?php

namespace App\Http\Controllers;

use App\noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('noticias');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        noticias::create($request->all());


        return redirect()->route('noticias')->with('info','noticia creada');

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
     * @param  \App\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function show(noticias $noticias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function edit(noticias $noticias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, noticias $noticias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function destroy(noticias $noticias)
    {
        //
    }
}
