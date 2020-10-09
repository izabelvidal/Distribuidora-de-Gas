@extends('layouts.app')


@section('content')
<table class="table">
        <thead>
        <tr>
            <th>Nome do produto</th>
            <th>Marca</th>
            <th>Quatidade</th>
            <th>Forma de pagamento</th>
            <th>Opção</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $venda->produto->nome }}</td>
                <td>{{ $venda->produto->marca }}</td>
                <td>{{ $venda->quantidade }}</td>
                <td>{{ $venda->forma_pagamento }}</td>
                <td>
                    <a href="{{route("vendas.index", [$venda])}}"">voltar</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection