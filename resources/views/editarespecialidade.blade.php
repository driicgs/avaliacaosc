@extends('layout.app', ["current"=>"especialidades"])

@section('body')

<div class="card border">
        <div class="card-body">
                <h4 class="card-title">Atualização de Especialidade</h4>
                <hr>
            <form action="/especialidades/{{$esp->id}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="nome">Nome da Especialidade</label>
                    <input type="text" class="form-control" name="nome" value="{{$esp->nome}}"
                           id="nome" placeholder="Nome exemplo">
                    </div>
                            <div class="form-group col-md-12">
                    <label for="descricao">Descrição da Especialidade</label>
                    <textarea type="text" class="form-control" name="descricao" value="{{$esp->descricao}}"
                           id="descricao">
                        </textarea>
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