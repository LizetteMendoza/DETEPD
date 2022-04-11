<?php

namespace App\Http\Controllers;

use App\Models\Forma;
use Illuminate\Http\Request;

class FormaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aplicaciones = Forma::all();
        return view('solicitantes.allSolicitante', compact('aplicaciones'));
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
     * @param  \App\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function show(Forma $forma)
    {
        dd($forma);
        return view('solicitantes.showSolicitud', compact('forma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function edit(Forma $forma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forma $forma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forma $forma)
    {
        //
    }
}
