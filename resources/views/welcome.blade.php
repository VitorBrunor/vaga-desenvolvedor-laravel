<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Listagem de Clientes</h1>
    <a href="criar_cliente.html" class="btn">Adicionar Novo Cliente</a>
    
    <table border="1" width="100%" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>João Silva</td>
                <td>joao@email.com</td>
                <td>123456789</td>
                <td>
                    <a href="editar_cliente.html?id=1" class="btn">Editar</a>
                    <a href="#" onclick="return confirm('Tem certeza que deseja excluir este cliente?')" class="btn">Excluir</a>
                </td>
            </tr>
            <!-- Repita as linhas para mais clientes -->
        </tbody>
    </table>
</body>
</html>
