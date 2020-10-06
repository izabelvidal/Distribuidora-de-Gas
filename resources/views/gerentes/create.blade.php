@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form>
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" type="text" placeholder="Nome" value="{{ old('nome') }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
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
                <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua">
            </div>
            <div class="col-md-4">
                <label>Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
            </div>
            <div class="col-md-2">
                <label>Número</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Ex: 20">
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
                <input type="text" class="form-control" name="CEP" id="CEP" placeholder="Ex: 55158-400">
            </div>
        </div>
    
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!--<form action="/gerentes" method="post">
        @csrf
        <div><label for="nome">nome:</label> <input type="text" name="nome" id="nome" value="{{ old('nome') }}"></div>
        <div><label for="CPF">CPF:</label> <input type="text" name="CPF" id="CPF" value="{{ old('CPF') }}"></div>
        <div><label for="nascimento">nascimento:</label> <input type="date" name="nascimento" id="nascimento" value="{{ old('nascimento') }}"></div>
        <div><label for="email">email:</label> <input type="email" name="email" id="email" value="{{ old('email') }}"></div>
        <div><label for="senha">senha:</label> <input type="password" name="senha" id="senha"></div>
        <div><label for="senha_confirmation">senha confirmation:</label> <input type="password" name="senha_confirmation"
                                                                                id="senha_confirmation"></div>
        <div><label for="telefone">telefone:</label> <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}"></div>
        <div><label for="tipo">tipo:</label> <input type="text" name="tipo" id="tipo" value="{{ old('tipo') }}"></div>
        <div><label for="rua">rua:</label> <input type="text" name="rua" id="rua" value="{{ old('rua') }}"></div>
        <div><label for="bairro">bairro:</label> <input type="text" name="bairro" id="bairro" value="{{ old('bairro') }}"></div>
        <div><label for="CEP">CEP:</label> <input type="text" name="CEP" id="CEP" value="{{ old('CEP') }}"></div>
        <div><label for="numero">numero:</label> <input type="text" name="numero" id="numero" value="{{ old('numero') }}"></div>
        <div><label for="cidade">cidade:</label> <input type="text" name="cidade" id="cidade" value="{{ old('cidade') }}"></div>
        <div><input type="submit" value="cadastrar"></div>
    </form>-->
@endsection