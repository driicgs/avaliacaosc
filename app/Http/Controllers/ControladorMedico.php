<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Especialidades;
use App\EspecialidadeMedico;

class ControladorMedico extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meds = Medico::where('ativo','=', 1)->get();
        return view('medicos', compact('meds'));
        //return view('medicos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $esmeds = Especialidades::where('ativo','=', 1)->get();
        return view('novomedico', compact('esmeds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $med = new Medico();
        $med->nome = $request->input('nome');
        $med->rg = $request->input('rg');
        $med->cpf = $request->input('cpf');
        $med->logradouro = $request->input('logradouro');
        $med->numero = $request->input('numero');
        $med->bairro = $request->input('bairro');
        $med->cidade = $request->input('cidade');
        $med->estado = $request->input('estado');
        $med->telefone = $request->input('telefone');
        $med->celular = $request->input('celular');
        $med->crm = $request->input('crm');
        $med->ativo = 1;
        $med->save();
        
        $esmed = new EspecialidadeMedico();
        $idmed = Medico::orderBy('id', 'desc')->first()->id;
        $esmed->idmedico =$idmed;
        $idesp= (int)$request->input('especialidade')[0];
        $esmed->idespecialidade= $idesp;
        $esmed->ativo = 1;
        $esmed->save();

        return redirect('/medicos');
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
        $med = Medico::find($id);
        if(isset($med)) {
            $esmeds = Especialidades::where('ativo','=', 1)->get();
            $medesp = EspecialidadeMedico::where('idmedico', '=', $med)->get();
            return view('editarmedico', compact('med','esmeds', 'medesp'));
        }
        return redirect('/medicos');
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
        $med = medico::find($id);
        if(isset($med)) {
            $med->nome = $request->input('nome');
            $med->rg = $request->input('rg');
            $med->cpf = $request->input('cpf');
            $med->logradouro = $request->input('logradouro');
            $med->numero = $request->input('numero');
            $med->bairro = $request->input('bairro');
            $med->cidade = $request->input('cidade');
            $med->estado = $request->input('estado');
            $med->telefone = $request->input('telefone');
            $med->celular = $request->input('celular');
            $med->crm = $request->input('crm');
            $med->ativo = 1;
            $med->save();

            $med = Medico::find('idmedico',$id);
            if (isset($med)) {
                $med->ativo = 2;
                $med->save();
            }

            $esmed = new EspecialidadeMedico();
            $esmed->idmedico =$id;
            $idesp= (int)$request->input('especialidade')[0];
            $esmed->idespecialidade= $idesp;
            $esmed->ativo = 1;
            $esmed->save();

        }
        
        return redirect('/medicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $med = Medico::find($id);
        if (isset($med)) {
            $med->ativo = 2;
            $med->save();
        }

        $med = Medico::find($id);
            if (isset($med)) {
                $med->ativo = 2;
                $med->save();
            }
    
        return redirect('/medicos');
    }
}
