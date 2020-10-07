@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/produtos" method="post">
        @csrf
        <div><label for="nome">nome:</label> <input type="text" name="nome" id="nome" value="{{ old('nome') }}"></div>
        <div><label for="marca">marca:</label> <input type="text" name="marca" id="marca" value="{{ old('marca') }}"></div>
        <div><label for="quantidade_em_estoque">quantidade em estoque:</label> <input type="number" name="quantidade_em_estoque" id="quantidade_em_estoque" value="{{ old('quantidade_em_estoque') }}"></div>
        <div><label for="peso">peso:</label> <input type="number" name="peso" id="peso" value="{{ old('peso') }}"></div>
        <div><label for="preco">preco:</label> <input type="number" name="preco" id="preco"></div>
        <div><label for="preco_revenda">preco revenda:</label> <input type="number" name="preco_revenda" id="preco_revenda" value="{{ old('preco_revenda') }}"></div>
    </form>
@endsection