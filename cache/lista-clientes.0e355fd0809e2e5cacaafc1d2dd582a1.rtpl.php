<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Clientes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script type="text/javascript" src="../js/1.5.2.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput-1.3.min.js"></script>
    <script>
        jQuery(function ($) {
            $("#cpf").mask("999.999.999-99");
            $("#rg").mask("99.999.999-9");
            $("#cnpj").mask("99.999.999/9999-99");
            $("#tel").mask("(99)9999-9999");
            $("#cel").mask("(99)99999-9999");
            $("#cep").mask("99999-999");
            $("#dt").mask("99/99/9999");
            $("#pass").mask("*******");
            $("#lt").mask("aaaaaaaaaaaaa");
        });
    </script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <a class="navbar-brand" href="#">MINHA LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSuport">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSuport">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Area de trabalho</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cadastros
                        </a>
                        <div class="dropdown-menu" arial-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="cliente.html">Clientes</a>
                            <a class="dropdown-item" href="#">Veiculos</a>
                            <a class="dropdown-item" href="#">Serviços</a>
                        </div>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>

    <div class="container mt-2">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">TP</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Numero</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">{CODIGO}</th>
                    <td>{NOME}</td>
                    <td>{TIPO}</td>
                    <td>{ENDERECO}</td>
                    <td>{NUMERO}</td>
                </tr>
            </tbody>

        </table>
    </div>
</body>

</html>
