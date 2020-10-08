@extends('layouts.app')

@section('content')

    <form action="/gerentes" method="post">
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" type="text" placeholder="Nome" value="{{ old('nome') }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}">
        </div>

        <div class="form-row">
            <div class="col">
                <label> Senha</label>
                <input class="form-control" type="password" placeholder="Senha" name="senha" id="senha">
            </div>
            <div class="col">
                <label>Confirmar Senha</label>
                <input class="form-control" type="password" placeholder="Confirmar senha" name="senha" id="senha">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6">
                <label>Rua</label>
                <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua" value="{{ old('rua') }}">
            </div>
            <div class="col-md-4">
                <label>Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="{{ old('bairro') }}">
            </div>
            <div class="col-md-2">
                <label>Número</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Ex: 20" value="{{ old('numero') }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="{{ old('cidade') }}">
            </div>
            <div class="form-group col-md-4">
                <label>Estado</label>
                <select id="estado" name="estado" class="form-control">
                    <option selected>Choose...</option>
                    <option value="PE">Pernambuco</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label>CEP</label>
                <input type="text" class="form-control" name="CEP" id="CEP" placeholder="Ex: 55158-400" value="{{ old('CEP') }}">
            </div>
        </div>
    
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection