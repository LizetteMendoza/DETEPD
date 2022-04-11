<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ApplicationController extends Controller
{
    
    /*public function __construct(){
        $this->middleware('auth')->except(['all']);
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$solicitud = Auth::user()->solicitud;
        //$libros= Libro::with('generos')->get();
        $aplicaciones = Application::all();
        return view('solicitantes.allSolicitante', compact('aplicaciones'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitantes.formSolicitud'); //Aquí nos manda a la vista de la solicitud y de aquí se manda el form a store
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        
        $request-> validate([
            'nombre' => 'require',
            'curp' => 'required | min:18 | max:18 |regex:[A-Z]{1}[AEIOU]{1}[A-Z]{2}
            [0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])
            [HM]{1}
            (AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)
            [B-DF-HJ-NP-TV-Z]{3}
            [0-9A-Z]{1}
            [0-9]{1}$',
            'direccion' => 'required',
            'imf' => 'required',
            'edad' => 'required',
            'telefono' => 'required| min:10 |max:|10',
            'sexo' => 'required',
            'limitacion' => 'required',
            'escolaridad'=> 'required',
            'plantel'=> 'required',
            'etnia' => 'required'
        ]);

        $solicitud = new Application(); //Se crea un objeto del modelo Application para poder guardaro en él
        $solicitud->curp = $request->curp;
        $solicitud->direccion = $request->direccion;
        $solicitud->imf = $request->imf;
        $solicitud->edad = $request->edad;
        $solicitud->telefono = $request->telefono;
        $solicitud->sexo = $request->sexo;
        $solicitud->limitacion = $request->limitacion;
        $solicitud->escolaridad = $request->escolaridad;
        $solicitud->plantel = $request->plantel;
        $solicitud->etnia = $request->etnia;

        $solicitud->save();

        return redirect('/solicitud'); //Ruta a la que te envía una vez que se guardan los datos, en este caso es el index

        //$solicitud//Aquí se validan los datos y se guardan
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::find($id);
        return view('solicitantes.showSolicitud', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::find($id);
        return view('solicitantes.formSolicitud', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $solicitud = Application::find($id);

        $request-> validate([
            'nombre' => 'require',
            'curp' => 'required',
            'direccion' => 'required',
            'imf' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'sexo' => 'required',
            'limitacion' => 'required',
            'escolaridad'=> 'required',
            'plantel'=> 'required',
            'etnia' => 'required'
        ]);

        $solicitud->curp = $request->curp;
        $solicitud->direccion = $request->direccion;
        $solicitud->imf = $request->imf;
        $solicitud->edad = $request->edad;
        $solicitud->telefono = $request->telefono;
        $solicitud->sexo = $request->sexo;
        $solicitud->limitacion = $request->limitacion;
        $solicitud->escolaridad = $request->escolaridad;
        $solicitud->plantel = $request->plantel;
        $solicitud->etnia = $request->etnia;

        $solicitud->save();

        return redirect('/solicitud'); //Ruta a la que te envía una vez que se guardan los datos, en este caso es el index

        //$solicitud//Aquí se validan los datos y se guardan
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $application = Application::find($id);
        $application->delete();
        return redirect('/solicitud')->with('delete', 'Libro eliminado');
    }
}
