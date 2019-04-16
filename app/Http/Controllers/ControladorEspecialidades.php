<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidades;
class ControladorEspecialidades extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $esps = Especialidades::where('ativo','=', 1)->get();
        return view('especialidades', compact('esps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $esmeds = Especialidades::all();
        return view('novoespecialidades', compact('esmeds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $esp = new Especialidades();
        $esp->nome = $request->input('nome');
        $esp->descricao = $request->input('descricao');
        $esp->ativo = 1;
        $esp->save();

        return redirect('/especialidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $esp = Especialidades::find($id);
        if(isset($esp)) {
            return view('editarespecialidade', compact('esp'));
        }
        return redirect('/especialidades');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $esp = Especialidades::find($id);
        if(isset($esp)) {
            $esp->nome = $request->input('nome');
            $esp->descricao = $request->input('descricao');
            $esp->ativo = 1;
            $esp->save();

        }
        
        return redirect('/especialidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $esp = Especialidades::find($id);
        if(isset($esp)) {
            $esp->ativo = 2;
            $esp->save();

        }
        
        return redirect('/especialidades');
    }
}
