@extends('layout.app', ["current" => "medicos"])

@section('body')
    
<div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de médicos</h5>
    
    @if(count($meds) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
        @foreach($meds as $med)
                    <tr>
                        <td>{{$med->id}}</td>
                        <td>{{$med->nome}}</td>
                        <td>
                            <a href="/medicos/editar/{{$med->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/medicos/apagar/{{$med->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
        @endforeach                
                </tbody>
            </table>
    @endif        
        </div>
        <div class="card-footer">
            <a href="/medicos/novo" class="btn btn-sm btn-primary" role="button">Novo Médico</a>
        </div>
    </div>

@endsection
