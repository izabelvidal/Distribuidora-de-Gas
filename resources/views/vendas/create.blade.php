<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cadastro</title>
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
<form action="/vendas" method="post">
    @csrf
    <select id="produto_id" name="produto_id" required>
    <option value="" disabled selected>produto</option>        
    @foreach($produtos as $produto)
    <option value="{{$produto->id}}">{{ $produto->name }}</option>
    @endforeach
    <select id="cliente_id" name="cliente_id" required>
    <option value="" disabled selected>cliente</option>        
    @foreach($clientes as $cliente)
    <option value="{{$cliente->id}}">{{ $cliente->name }}</option>
    @endforeach
    <div><label for="quantidade">quantidade:</label> <input type="number" name="quantidade" id="quantidade" value="{{ old('quantidade') }}"></div>
    <div><input type="submit" value="cadastrar"></div>

</form>
</body>

</html>