@extends('layouts.app')

@section('content')

<div class="form-row">
    <form action="{{route('vendas.update', $venda)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="col">
            <label> Nome do Produto</label>
            <input class="form-control" type="text" placeholder="Nome" name="nome" value="Nome">
        </div>
        <div class="col">
            <label>Marca</label>
            <input class="form-control" type="text" placeholder="Marca" name="marca">
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <label>Quantidade</label>
            <input class="form-control" type="number" placeholder="Quantidade" name="quantidade" value="Quantidade">
        </div>
        <div class="col">
        <label>Estado</label>
                <select id="estado" name="estado" class="form-control">
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
