<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Sistema de Clientes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="listarCliente.php">Listar Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="form_cadastroCliente.php">Cadastrar Cliente</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Bem-vindo ao Sistema de Gestão de Clientes da Padaria!!!</h1>
            <p class="lead">Este sistema permite gerenciar as informações dos clientes de maneira simples e eficiente.</p>
            <hr class="my-4">
            <p>Navegue pelas opções abaixo para começar:</p>
            <a class="btn btn-primary btn-lg" href="listarCliente.php" role="button">Listar Clientes</a>
            <a class="btn btn-success btn-lg" href="form_cadastroCliente.php" role="button">Cadastrar Novo Cliente</a>
        </div>
    </div>

    <footer class="footer bg-light text-center py-3">
        <div class="container">
            <span class="text-muted">Padaria © 2024</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
