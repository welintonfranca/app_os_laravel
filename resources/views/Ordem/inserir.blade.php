@extends('home')
@section('conteudo')
<!doctype html>
<html lang="PT-BR">
<head>
    <link href="../../css/app.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir</title>
    <style>
        h1{font-size: 20px}


    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="/ordem/inserir">Inserir</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ordem/pesquisar">pesquisar</a>
            </li>

        </ul>
    </nav>
<div class="container">
    <h1 class="mt-2">Inserir produto</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success">Produto inserido com sucesso!</div>
    @endif

    <form action="/ordem/inserir" method="post" class="mt-2">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <div class="form-group">
            <label for="nome">Nome: <span class="text-danger">*</span></label>
            <input type="text" id="nome" name="nome" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição: <span class="text-danger">*</span></label>
            <input type="text" id="descricao" name="descricao" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço: <span class="text-danger">*</span></label>
            <input type="text" id="endereco" name="endereco" class="form-control" autofocus required>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone: <span class="text-danger">*</span></label>
            <input type="text" id="telefone" name="telefone" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="data_abertura">Data de abertura: </label>
            <input type="date" id="data_abertura" name="data_abertura" class="form-control">
        </div>
        <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
        <input type="submit" class="btn btn-success mt-2" value="Inserir">
    </form>
</div>
</div>
</body>
</html>
@stop