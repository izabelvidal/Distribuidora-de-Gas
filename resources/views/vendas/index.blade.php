@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Marca</th>
            <th>Quantidade</th>
            <th>Forma de pagamento</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vendas as $venda)
            <tr>
                <td>{{ $venda->produto->nome }}</td>
                <td>{{ $venda->produto->marca }}</td>
                <td>{{ $venda->quantidade }}</td>
                <td>{{ $venda->Forma de pagamento }}</td>
                <td>
                    <a href="{{route("vendas.edit", [$venda])}}">editar</a>
                    <a href="{{route("vendas.show", [$venda])}}">visualizar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection