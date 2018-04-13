@extends('home')
@section('content')
<!doctype html>
<html lang="PT-BR">
<head>
    <link href="../../css/app.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar</title>

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
    <h1 class="mt-2">Alterar ordem</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success mt-2">{{$mensagem}}</div>
    @endif
    <form action="/ordem/alterar" method="post" class="mt-2">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <div class="form-group">
            <label for="id">ID: <span class="text-danger">*</span></label>
            <input type="text" id="id" name="id" class="form-control" required readonly value="{{$ordem->id}}">
        </div>
        <div class="form-group">
            <label for="problema_constatado">Problema Constatado <span class="text-danger">*</span></label>
            <input type="text" id="problema_constatado" name="problema_constatado" class="form-control" autofocus required value="{{$ordem->problema_constatado}}">
        </div>

        <div class="form-group">
            <label for="valor">Valor: <span class="text-danger">*</span></label>
            <input type="number" id="valor" name="valor" class="form-control" required value="{{$ordem->valor}}">
        </div>
        <div class="form-group">
            <label for="data_fechamento">Data de Fechamento: </label>
            <input type="date" id="data_fechamento" name="data_fechamento" class="form-control" value="{{$ordem->data_fechamento}}">
        </div>
        <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
        <input type="submit" class="btn btn-success mt-2" value="Alterar">
    </form>
</div>
</body>
</html>
@stop