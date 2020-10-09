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
        @foreach ($venda->items as $item )
            <tr>
                <td>{{ $item->produto->nome }}</td>
                <td>{{ $item->produto->marca }}</td>
                <td>{{ $item->quantidade }}</td>
                <td>{{ $venda->forma_pagamento }}</td>
            </tr>
        @endforeach
        <tr>
            <a href="{{route("vendas.index", [$venda])}}"">voltar</a>
        </tr>
        </tbody>
    </table>
@endsection