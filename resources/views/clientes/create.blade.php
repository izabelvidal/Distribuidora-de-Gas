<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/clientes" method="post">
    @csrf
    <label for="nome">nome</label>
    <input type="text" id="nome" value="{{old('nome')}}" name="nome">
    <label for="CPF">CPF</label>
    <input type="text" id="CPF" value="{{old('CPF')}}" name="CPF">
    <label for="email">email</label>
    <input type="email" id="email" value="{{old('email')}}" name="email">
    <label for="senha">senha</label>
    <input type="password" id="senha" name="senha">
    <label for="senha_confirmation">senha</label>
    <input type="password" id="senha_confirmation" name="senha_confirmation">
    <label for="nascimento">nascimento</label>
    <input type="date" id="nascimento" value="{{old('nascimento')}}" name="nascimento">
    <input type="submit">
</form>
</body>
</html>
