@extends('layout.app', ["current"=>"medicos"])

@section('body')

<div class="card border">
        <div class="card-body">
       <h4 class="card-title">Atualização de Médico</h4>
       <hr>
            <form action="/medicos/{{$med->id}}" method="POST">
                @csrf
                <div class="form-row">
                            <div class="form-group col-md-6">
                                          <label for="nome">Nome</label>
                                                 <input type="text" class="form-control" name="nome" value="{{$med->nome}}"
                                                 id="nome" placeholder="Nome exemplo">
                                   </div>
                                   <div class="form-group col-md-3">
                           <label for="rg">Nº RG</label>
                    <input type="text" class="form-control" name="rg" value="{{$med->rg}}"
                           id="rg" placeholder="00.000.000-0">
                     </div>
                     <div class="form-group col-md-3">
                           <label for="cpf">Nº CPF</label>
                    <input type="text" class="form-control" name="cpf" value="{{$med->cpf}}"
                           id="cpf" placeholder="000.000.000-00">
                     </div>
                     <div class="form-group col-md-5">
                           <label for="logradouro">Logradouro</label>
                    <input type="text" class="form-control" name="logradouro" value="{{$med->logradouro}}"
                           id="logradouro" placeholder="RUA DAS FLORES">
                     </div>
                     <div class="form-group col-md-1">
                           <label for="numero">Número</label>
                    <input type="text" class="form-control" name="numero" value="{{$med->numero}}"
                           id="numero" placeholder="123">
                     </div>
                     <div class="form-group col-md-3">
                           <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" name="bairro" value="{{$med->bairro}}"
                           id="bairro" placeholder="JARDIM FLORIDO">
                     </div>
                     <div class="form-group col-md-3">
                           <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" value="{{$med->cidade}}"
                           id="cidade" placeholder="São Paulo">
                     </div>
                     <div class="form-group col-md-1">
                           <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" value="{{$med->estado}}"
                           id="estado" placeholder="SP">
                     </div>
                     <div class="form-group col-md-3">
                           <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" value="{{$med->telefone}}"
                           id="telefone" placeholder="(18)1234-1234">
                     </div>
                     <div class="form-group col-md-3">
                           <label for="celular">Celular</label>
                    <input type="text" class="form-control" name="celular" value="{{$med->celular}}"
                           id="celular" placeholder="(18)11234-1234">
                     </div>
                     <div class="form-group col-md-3">
                           <label for="crm">CRM</label>
                    <input type="text" class="form-control" name="crm" value="{{$med->crm}}"
                           id="crm" placeholder="CRM-12345">
                     </div>
                     <hr>
                     <div class="form-group col-md-6">
                           <label for="especialidade">Especialidade</label>
                           <select class="form-control" name="especialidade[]">
                            <option>Selecione uma Especialidade</option>
                            @if(count($medesp) > 0)
                                   @foreach($medesp as $medep)
                                          <option value={{$medep->id}}>Selecione uma Especialidade</option>
                                   @endforeach
                            @endif
                                @foreach($esmeds as $esmd)
                                    <option name="especialidade[id][{{$esmd->id}}]" value={{$esmd->id}} >{{$esmd->nome}}</option>
                                @endforeach 
                             
                           </select> 
                     </div>
                     </div>
                </div>
                <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
                </div>
            </form>
        </div>
    </div>

@endsection

