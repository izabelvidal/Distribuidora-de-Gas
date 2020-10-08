@extends('layouts.app')

@section('content')

<div class="container mx-5">
    <form>
        <div class="form-row">
            <div class="col-md-8">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ old('nome') }}">
            </div>
        </div>
        
        <div class="form-row">
            <div class="col-md-4">
                <label>Marca</label>
                <input type="text" class="form-control" name="quantidade_em_estoque" placeholder="Marca" value="{{ old('marca') }}">
            </div>
            <div class="col-md-2">
                <label>Quantidade em estoque</label>
                <input type="number" class="form-control" name="quantidade_em_estoque" placeholder="Quantidade em estoque" value="{{ old('quantidade_em_estoque') }}">
            </div>
            <div class="col-md-2">
                <label>Peso</label>
                <input type="number" class="form-control" name="peso" placeholder="Peso" value="{{ old('peso') }}">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4">
                <label>Preço</label>
                <input type="number" class="form-control" name="preco" placeholder="Preco" value="{{ old('preco') }}">
            </div>
            <div class="col-md-4">
                <label>Preço de revenda</label>
                <input type="number" class="form-control" name="preco_revenda" placeholder="Preco revenda" value="{{ old('preco_revenda') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary my-5">Submit</button>
    </form>
</div>
@endsection