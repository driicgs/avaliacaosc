@extends('layout.app', ["current" => "especialidades"])

@section('body')
    
<div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Especialidades</h5>
    
    @if(count($esps) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
        @foreach($esps as $esp)
                    <tr>
                        <td>{{$esp->id}}</td>
                        <td>{{$esp->nome}}</td>
                        <td>
                            <a href="/especialidades/editar/{{$esp->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/especialidades/apagar/{{$esp->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
        @endforeach                
                </tbody>
            </table>
    @endif        
        </div>
        <div class="card-footer">
            <a href="/especialidades/novo" class="btn btn-sm btn-primary" role="button">Nova Especialidade</a>
        </div>
    </div>

@endsection

