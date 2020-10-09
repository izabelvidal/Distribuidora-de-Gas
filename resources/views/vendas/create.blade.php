@extends('layouts.app')

@section('content')

<form action="/vendas" method="post">
    @csrf
    <div class="form-row">
        <div class="col">
            <label> Nome do Produto</label>
            <input class="form-control" type="text" placeholder="Nome" name="nome"  >
        </div>
        <div class="col">
            <label>Marca</label>
            <input class="form-control" type="text" placeholder="Marca" name="marca" >
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <label>forma de pagamento</label>
            <select id="forma_pagamento" name="forma_pagamento" class="form-control">
            <option selected disabled value="">Selecionar Pagamento</option>
                <option value="Dinheiro">Dinheiro</option>
                <option value="Credito">Crédito</option>
                <option value="Debito">Débito</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary my-5">Confirmar</button>
</form>
        
    </form>
    
@endsection
