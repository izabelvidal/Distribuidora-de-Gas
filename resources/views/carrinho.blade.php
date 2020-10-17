@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Carrinho</div>
                    <div class="card-body">
                        <h1>Itens</h1>
                        <ul>
                            @if(session()->has('itens'))
                                @foreach (session('itens') as $key => $value )
                                    <li>
                                        <form action="{{ route('carrinho.update', ['produto_id' => $key]) }}"
                                              id="update-{{$key}}" method="POST" style="display: inline">
                                            @csrf
                                            @method('PUT')
                                            <select name="quantidade" id="quantidade"
                                                    onchange="document.getElementById('update-{{$key}}').submit()"
                                                    style="display: inline">
                                                @for($i = 1; $i <= $value['produto']->quantidade_em_estoque; $i++)
                                                    <option value="{{$i}}"
                                                        {{($i == $value['quantidade']) ? 'selected' : ''}}>{{$i}}
                                                    </option>
                                                @endfor
                                            </select>
                                        </form>
                                        {{ $value['produto']->nome }}
                                        ; preço unitário: {{$value['produto']->preco}}; subtotal: {{$value['subtotal']}}
                                        <form action="{{ route('carrinho.destroy', ['produto_id' => $key]) }}"
                                              id="delete-{{$key}}" method="POST" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" onclick="document.getElementById('delete-{{$key}}').submit()">Remover</a>
                                        </form>
                                    </li>
                                @endforeach
                                total: {{session()->get('total')}}
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" type="submit" href="{{route('vendas.create')}}">efetuar compra</a>
    </div>
@endsection
