@extends('layouts.app')

@section('content')

<div class="form-row">
    <form action="{{route('vendas.update', $venda)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="col">
            <label> Nome do Produto</label>
            <input class="form-control" type="text" placeholder="Nome" name="nome" value="{{ $venda->produto->nome }}">
        </div>
        <div class="col">
            <label>Marca</label>
            <input class="form-control" type="text" placeholder="Marca" name="marca"value="{{ $venda->produto->marca }}">
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <label>Quantidade</label>
            <input class="form-control" type="number" placeholder="Quantidade" name="quantidade" value="{{ $venda->quantidade }}">
        </div>
        <div class="col">
        <label>Estado</label>
                <select id="forma_pagamento" name="Forma_pagamento" class="form-control">
                <option selected disabled value="">Selecionar Pagamento</option>
                    <option value="Dinheiro">Dinheiro</option>
                    <option value="Credito">Crédito</option>
                    <option value="Debito">Débito</option>
                </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary my-5">Confirmar</button>
    </form>
</div>
    
@endsection
