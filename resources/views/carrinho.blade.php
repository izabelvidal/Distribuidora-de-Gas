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
                            @foreach (Session::get('itens') as $k => $item )
                                <li>{{ $item['produto'] }} - {{$item['quantidade']}} - {{$item['preco']}} <a
                                        href="{{ route('remover', ['produto_id' => $k]) }}">Remover</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" type="submit" href="{{route('vendas.create')}}">efetuar compra</a>
    </div>
@endsection
