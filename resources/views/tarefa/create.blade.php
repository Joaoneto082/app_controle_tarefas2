@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Formulario</div>

                <div class="card-body">
                    <form method="post" action="{{route('tarefa.store')}}">
                            @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">   
                                <label class="form-label">Email</label>
                                 <input type="text" class="form-control" name="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" name="Data_de_nascimento">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Endereço</label>
                            <input type="text" class="form-control" name="Enderenço" placeholder="Rua dos Bobos, nº 0">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Endereço 2</label>
                            <input type="text" class="form-control" name="Endereço_2" placeholder="Apartamento, hotel, casa, etc.">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="form-label">Cidade</label>
                                <input type="text" class="form-control" name="Cidade">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label">Estado</label>
                                <input type="text" class="form-control" name="Estado">                        
                            </div>
                            <div class="form-group col-md-2">
                                <label class="form-label">CEP</label>
                                <input type="text" class="form-control" name="CEP">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                Clique em mim
                            </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
