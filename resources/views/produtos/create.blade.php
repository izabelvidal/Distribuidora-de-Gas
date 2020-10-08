@extends('layouts.app')

@section('content')

    <form>
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" name="nome" type="text" placeholder="Nome" value="{{ old('nome') }}">
        </div>

        <div class="form-group">
            <label>Marca</label>
            <input type="text" class="form-control" name="quantidade_em_estoque" placeholder="Marca" value="{{ old('marca') }}">
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <label>Quantidade em estoque</label>
                <input type="number" class="form-control" name="quantidade_em_estoque" placeholder="Quantidade_em_estoque" value="{{ old('quantidade_em_estoque') }}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <label>Peso</label>
                <input type="number" class="form-control" name="peso" placeholder="Peso" value="{{ old('peso') }}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <label>Preço</label>
                <input type="number" class="form-control" name="preco" placeholder="Preco" value="{{ old('preco') }}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <label>Preço de revenda</label>
                <input type="number" class="form-control" name="preco_revenda" placeholder="Preco_revenda" value="{{ old('preco_revenda') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection