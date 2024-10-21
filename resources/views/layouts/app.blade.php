<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cadastro de Clientes')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link para seu CSS -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
                <li><a href="{{ route('produtos.index') }}">Produtos</a></li>
                <li><a href="{{ route('pedidos.index') }}">Pedidos</a></li>
                <!-- Adicione outros links conforme necessário -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Onde o conteúdo específico da página será exibido -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Seu Nome ou Nome da Empresa</p>
    </footer>
</body>
</html>
