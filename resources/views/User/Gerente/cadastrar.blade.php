@extends('layouts.app')

@section('content')
    <form action="">
        @csrf
        <input type="text" placeholder="nome" id="nome" name="nome">
        <input type="number" placeholder="cpf" id="cpf" name="cpf">
        <input type="text" placeholder="nome" id="nome" name="nome">
    </form>
@endsection