<?php
session_start();
$login = false;
if ($_SESSION["username"] ?? null) {
    $login = true;
    $nomeusuario = $_SESSION["nome"];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos Disponíveis</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="lib.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        .container {
            width: 50%;
            margin: 0 auto;
        }

        h1 {
            font-size: 24px;
            text-align: center;
        }

        form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #000;
            color: #fff;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div class="body">
        <header id="navbar">
            <nav class="navbar navbar-expand-lg bg-dark">
                <img id="logo" src="./assets/Img_home/logo.jpeg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="PaginaInicial.php" style="color: white;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Reservas.php" style="color: white;">Reservas</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    Categorias
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="Economico.php">Economico</a></li>
                                    <li><a class="dropdown-item" href="Intermediario.php">Intermediario</a></li>
                                    <li><a class="dropdown-item" href="SUV.php">SUV</a></li>
                                    <li><a class="dropdown-item" href="Minivan.php">Minivan</a></li>
                                    <li><a class="dropdown-item" href="Executivo.php">Executivo</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Login.html" style="color: white;">Login</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <h1 style="color: white;">Novo usuário</h1>
            <form id="cadastro_cliente" action="./cadastra_cliente.php" method="POST">
                <div>
                    <label style="color: white;" for="cpf">Cpf:</label>
                    <input style="color: black;" type="number" id="cpf" name="cpf_cliente"><br>
                </div>
                <div>
                    <label style="color: white;" for="usuario">Nome completo:</label>
                    <input style="color: black;" type="text" id="usuario" name="username"><br>
                </div>
                <div>
                    <label style="color: white;" for="telefone">Telefone:</label>
                    <input style="color: black;" type="number" id="telefone" name="telefone_cliente"><br>
                </div>
                <div>
                    <label style="color: white;" for="cnh">Numero CNH:</label>
                    <input style="color: black;" type="numer" id="cnh" name="cnh_cliente"><br>
                </div>
                <div>
                    <label style="color: white;" for="email">E-mail:</label>
                    <input style="color: black;" type="text" id="email" name="email_cliente"><br>
                </div>
                <div>
                    <label style="color: white;" for="endereco">Endereço:</label>
                    <input style="color: black;" type="text" id="endereco" name="endereco_cliente"><br>
                </div>
                <div>
                    <label style="color: white;" for="senha">Senha:</label>
                    <input style="color: black;" type="password" id="senha" name="senha_cliente"><br>
                </div>
                <label style="color: white;" for="confSenha">Confirmar senha:</label>
                <input style="color: black;" type="password" id="confSenha" name="conf_senha">
                <div>
                    <input style="color: white;" type="submit" id="btnGravar" value="Criar conta">
                    <a style="color: white;" type="button" href="Login.html">Já possui conta? Retornar para o login.</a><br>
                    <a style="color: white;" type="button" href="CadastroCartao.html">Realizar cadastro do cartão.</a>
                </div>
            </form>
        </div>
        <footer>
            <p>&copy; 2023 Aluguel de Veículos</p>
        </footer>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                function cadastrarCliente() {
                    let url = "./cadastra_cliente.php";
                    let form = document.querySelector("#cadastro_cliente");
                    postForm(url, form).then(res => {
                        if (res.data.codigo == "1") {
                            Swal.fire({
                                title: 'Sucesso',
                                text: res.data.texto,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });

                        } else {
                            Swal.fire({
                                title: 'Erro',
                                text: res.data.texto,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }

                document.querySelector("#cadastro_cliente").addEventListener("submit", function(event) {
                    event.preventDefault();
                    cadastrarCliente();
                });
            });
        </script>
        <script defer src="seu-script.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./script.js"></script>

</html>