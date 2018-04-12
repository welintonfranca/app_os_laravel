<?php $titulo = '';?>
<!doctype html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="/css/app.css">
    <script lang="text/javascript" src="/js/app.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Ordem de serviço</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/ordem/inserir">Inserir</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/ordem/pesquisar">pesquisar</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/ordem/alterar">Alterar</a>
        </li>

    </ul>
</nav>

</body>
</html>