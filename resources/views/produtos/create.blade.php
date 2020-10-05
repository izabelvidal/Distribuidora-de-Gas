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
<form action="/produtos" method="post">
    @csrf
    <div><label for="nome">nome:</label> <input type="text" name="nome" id="nome" value="{{ old('nome') }}"></div>
    <div><label for="marca">marca:</label> <input type="text" name="marca" id="marca" value="{{ old('marca') }}"></div>
    <div><label for="quantidade_em_estoque">quantidade em estoque:</label> <input type="number"  name="quantidade_em_estoque" id="quantidade_em_estoque" value="{{ old('quantidade_em_estoque') }}"></div>
    <div><label for="peso">peso:</label> <input type="number" name="peso" id="peso" step="0.01" value="{{ old('peso') }}"></div>
    <div><label for="preco">preço:</label> <input type="number" name="preco" id="preco" step="0.01" value="{{ old('preco') }}"></div>
    <div><label for="preco_revenda">preço de revenda:</label> <input type="number" step="0.01" name="preco_revenda" id="preco_revenda" value="{{ old('preco_revenda') }}"></div>
    <div><input type="submit" value="cadastrar"></div>
</form>
</body>

</html>