@extends('layout.app', ["current" => "home"])

@section('body')
    <div class="jumbotron bg-light border-secondary">
        <div class="row">
                <div class="card-deck">
                        <div class="card border border-primary">
                            <div class="card-body">
                                <h5 class="card-title">Cadastro de Médicos</h5>
                                <p class="card=text">
                                    Aqui você cadastra todos os médicos.
                                    Só não se esqueça de cadastrar previamente as Especialidades
                                </p>
                                <a href="/medicos" class="btn btn-primary">Novo Cadastro</a>
                            </div>
                        </div>
                        <div class="card border border-primary">
                            <div class="card-body">
                                <h5 class="card-title">Cadastro de Especialidades</h5>
                                <p class="card=text">
                                    Cadastre as especialidades dos seus médicos
                                </p>
                                <a href="/especialidades" class="btn btn-primary">Novo Cadastro</a>
                            </div>
                        </div>            
                    </div>
        </div>
    </div>
@endsection