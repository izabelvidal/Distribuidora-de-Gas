@extends('layouts.app')

@section('content')
    <form action="/clientes" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" value="{{ $cliente->pessoa->nome }}">
        </div>
        <div class="form-group">
            <label for="CPF">CPF:</label>
            <input class="form-control" type="text" name="CPF" id="CPF" value="{{ $cliente->pessoa->CPF }}">
        </div>
        <div class="form-group">
            <label for="nascimento">nascimento:</label>
            <input class="form-control" type="date" name="nascimento" id="nascimento" value="{{ $cliente->pessoa->nascimento }}">
        </div>
        <div class="form-group">
            <label for="email">email:</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ $cliente->pessoa->email }}">
        </div>
        <div class="form-group">
            <label for="telefone">telefone:</label>
            <input class="form-control" type="text" name="telefone" id="telefone" value="{{ $cliente->telefone }}">
        </div>
        <div class="form-group">
            <label for="tipo">tipo</label>
            <div class="radio">
                <label><input type="radio" name="tipo" value="consumidor" id="consumidor">consumidor</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="tipo" value="revendedor" id="revendedor">revendedor</label>
            </div>
        </div>
        <div class="form-group">
            <label for="rua">rua:</label>
            <input class="form-control" type="text" name="rua" id="rua" value="{{ $cliente->pessoa->endereco->rua }}">
        </div>
        <div class="form-group">
            <label for="bairro">bairro:</label>
            <input class="form-control" type="text" name="bairro" id="bairro" value="{{ $cliente->pessoa->endereco->bairro }}">
        </div>
        <div class="form-group">
            <label for="CEP">CEP:</label>
            <input class="form-control" type="text" name="CEP" id="CEP" value="{{ $cliente->pessoa->endereco->CEP }}">
        </div>
        <div class="form-group">
            <label for="numero">numero:</label>
            <input class="form-control" type="text" name="numero" id="numero" value="{{ $cliente->pessoa->endereco->numero }}">
        </div>
        <div class="form-group">
            <label for="cidade">cidade:</label>
            <input class="form-control" type="text" name="cidade" id="cidade" value="{{ $cliente->pessoa->endereco->cidade }}">
        </div>
        <input class="btn btn-primary" type="submit" value="cadastrar">
    </form>
@endsection
