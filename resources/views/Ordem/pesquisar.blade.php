<!doctype html>
<html lang="PT-BR">
<head>
    <link href="../../css/app.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisa</title>
</head>
<body>
<div class="container">
    <h1 class="mt-2">Pesquisa de Ordem</h1>
    @if(count($nome) == 0)
        <div class="alert alert-danger mt-2">Nenhum produto encontrado com essa descrição!</div>
    @else
        <form action="/ordem/pesquisar" method="post" class="form-inline mt-2">
            <input type="hidden" name="_token" value="{{{csrf_token()}}}">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" class="form-control ml-2">
            </div>
            <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
        </form>
        <table class="table mt-2 text-center">
            <tr>
                <th>Id</th>
                <th class="text-left">Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Data de abertura</th>
            </tr>
            @foreach ($ordem as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td class="text-left">{{$p->nome}}</td>
                    <td>{{ $p->endereco }}</td>
                    <td>{{ $p->telefone }}</td>
                    <td>{{ $p->data_abertura }}</td>
                    <td><a href="/produtos/excluir/{{$p->id}}"><button class="btn btn-danger">Excluir</button> </a> </td>
                    <td><a href="/produtos/alterar/{{$p->id}}"><button class="btn btn-warning">Alterar</button> </a> </td>
                </tr>
            @endforeach
        </table>
    @endif
</div>

</body>
</html>
