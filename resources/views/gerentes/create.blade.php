@extends('layouts.app')

@section('content')

    <form action="/gerentes" method="post">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" type="text" placeholder="Nome" name="nome" value="{{ old('nome') }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-row">
            <div class="col">
                <label> Senha</label>
                <input class="form-control" type="password" placeholder="Senha" name="senha" id="senha">
            </div>
            <div class="col">
                <label>Confirmar Senha</label>
                <input class="form-control" type="password" placeholder="Confirmar senha" name="senha_confirmation" id="senha">
            </div>
        </div>

        <div class="form-row mt-3">
            <div class="col-md-4">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" name="nascimento" value="{{ old('nascimento') }}">
            </div>
            <div class="col-md-4">
                <label>CPF</label>
                <input type="text" class="form-control" placeholder="CPF" name="CPF" value="{{ old('CPF') }}">
            </div>
            <div class="col-md-4">
                <label>Telefone</label>
                <input type="number" class="form-control" placeholder="Telefone" name="telefone" value="{{ old('telefone') }}">
            </div>
        </div>
        <div class="form-row mt-3">
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
    
        <div class="form-row mt-3">
            <div class="form-group col-md-6">
                <label>Cidade</label>
                <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade" value="{{ old('cidade') }}">
            </div>
            <div class="form-group col-md-4">
                <label>Estado</label>
                <select id="estado" name="estado" class="form-control">
                <option selected disabled value="">Selecionar Estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
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