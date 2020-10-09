@extends('layouts.app')


@section('content')
<table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Marca</th>
            <th>Quatidade em estoque</th>
            <th>Peso</th>
            <th>Preço</th>
            <th>Preço de revenda</th>
            <th>Opção</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->marca }}</td>
                <td>{{ $produto->quantidade_em_estoque }}</td>
                <td>{{ $produto->peso }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->preco_revenda }}</td>
                <td>
                    <a href="{{route("produtos.index", [$produto])}}"">voltar</a>
                </td>
            </tr>
        </tbody>
    </table>
    <form action="{{ route('adicionar') }}" method="post" >
        @csrf
        <input type="hidden" name="produto_id" value="{{ $produto->id }}" />
        Quantidade: <input type="number" name="quantidade" min='1' max='10' value='1' />
        <input type="submit" value="Add" />
    </form>
@endsection