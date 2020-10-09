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
@endsection