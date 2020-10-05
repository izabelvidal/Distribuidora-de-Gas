@extends('layouts.app')

@section('content')
    <table >
            <tr >
                <td style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $gerente->pessoa->nome }}</td>
                <td style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $gerente->pessoa->nascimento }}</td>
                <td style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $gerente->pessoa->email }}</td>
                <td style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $gerente->pessoa->senha }}</td>
                <td  style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $gerente->pessoa->CPF }}</td>
                <td style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $gerente->telefone }}</td>
                <td style="border-style: solid;
    border-width: 5px;border-color: blue;">{{ $gerente->tipo }}</td>
            </tr>
    </table>
@endsection