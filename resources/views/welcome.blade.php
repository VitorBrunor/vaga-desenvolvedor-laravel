<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Bem-vindo à aplicação de gestão de pedidos</h1>
    <nav>
        <ul>
            <li><a href="{{ route('clientes.index') }}">Gerenciar Clientes</a></li>
            <li><a href="{{ route('produtos.index') }}">Gerenciar Produtos</a></li>
            <li><a href="{{ route('pedidos.index') }}">Gerenciar Pedidos</a></li>
        </ul>
    </nav>
</body>
</html>
