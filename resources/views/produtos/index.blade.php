@extends('layouts.app')

@section('content')
    <table >
            <tr >
                <td style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $produto->nome }}</td>
                <td style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $produto->marca }}</td>
                <td style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $produto->quantidade_em_estoque }}</td>
                <td style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $produto->peso }}</td>
                <td  style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $produto->preco }}</td>
                <td style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $produto->preco_revenda }}</td>
            </tr>
    </table>
@endsection