@extends('layouts.app')

@section('content')
<div class="form-group">
        <label for="nome">nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" value="{{ $gerente->pessoa->nome }}" readonly>
    </div>
    <div class="form-group">
        <label for="email">email:</label>
        <input class="form-control" type="email" name="email" id="email" value="{{ $gerente->pessoa->email }}" readonly>
    </div>
    <div class="form-row">
        <div class="col-md-4">
            <label for="telefone">telefone:</label>
            <input class="form-control" type="text" name="telefone" id="telefone" value="{{ $gerente->telefone }}"
                   readonly>
        </div>
        <div class="col-md-4">
            <label for="CPF">CPF:</label>
            <input class="form-control" type="text" name="CPF" id="CPF" value="{{ $gerente->pessoa->CPF }}" readonly>
        </div>
        <div class="col-md-4">
            <label for="nascimento">nascimento:</label>
            <input class="form-control" type="date" name="nascimento" id="nascimento"
                   value="{{ $gerente->pessoa->nascimento }}" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4">
            <label for="cidade">cidade:</label>
            <input class="form-control" type="text" name="cidade" id="cidade"
                   value="{{ $gerente->pessoa->endereco->cidade }}" readonly>
        </div>
        <div class="col-md-4">
            <label for="bairro">bairro:</label>
            <input class="form-control" type="text" name="bairro" id="bairro"
                   value="{{ $gerente->pessoa->endereco->bairro }}" readonly>
        </div>
        <div class="col-md-4">
            <label for="CEP">CEP:</label>
            <input class="form-control" type="text" name="CEP" id="CEP"
                   value="{{ $gerente->pessoa->endereco->CEP }}" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-8">
            <label for="rua">rua:</label>
            <input class="form-control" type="text" name="rua" id="rua"
                   value="{{ $gerente->pessoa->endereco->rua }}" readonly>
        </div>
        <div class="col-md-4">
            <label for="numero">numero:</label>
            <input class="form-control" type="text" name="numero" id="numero"
                   value="{{ $gerente->pessoa->endereco->numero }}" readonly>
        </div>
    </div>
@endsection