@extends('layouts.app')

@section('content')
    <h2>Cadastrar</h2>

    <form action="">
        @csrf
        <div class="input-block">
            <input type="text" placeholder="nome" id="nome" name="nome">
        </div>
        <div class="input-block">
            <input type="number" placeholder="cpf" id="cpf" name="cpf">
        </div>
    </form>
@endsection