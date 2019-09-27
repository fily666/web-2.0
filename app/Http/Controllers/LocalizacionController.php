<?php

namespace App\Http\Controllers;

use App\localizacion;
use Illuminate\Http\Request;

class LocalizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('localizacion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\localizacion  $localizacion
     * @return \Illuminate\Http\Response
     */
    public function show(localizacion $localizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\localizacion  $localizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(localizacion $localizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\localizacion  $localizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, localizacion $localizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\localizacion  $localizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(localizacion $localizacion)
    {
        //
    }
}
