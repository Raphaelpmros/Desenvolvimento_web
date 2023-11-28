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
</head>

<body>
    <header id="navbar">
        <nav class="navbar navbar-expand-lg bg-dark">
            <img id="logo" src="./assets/Img_home/logo.jpeg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                        <?php
                        if (!$login) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="Login.html" style="color: white;">Login</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;"><?php echo ($nomeusuario); ?> - Perfil</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="Perfil.php">Perfil</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Sair</a></li>
                                </ul>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <body style="background-color: black; color: #fff;">
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .container {
                margin: 50px auto;
            }

            .timeline {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .container {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                margin: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .container::after {
                content: '';
                position: absolute;
                width: 20px;
                height: 20px;
                background-color: #007bff;
                border: 4px solid #fff;
                border-radius: 50%;
                top: 50%;
                transform: translateY(-50%);
                right: -10px;
            }

            .content {
                padding: 20px;
            }

            h2 {
                color: black;
            }

            li {
                color: gray;
            }

            p {
                color: black;
            }

            strong {
                color: gray;
                display: block;
                margin-top: 10px;
            }

            .btn-style {
                display: inline-block;
                padding: 10px 20px;
                text-decoration: none;
                background-color: grey;
                color: #fff;
                border-radius: 5px;
                transition: background-color 0.3s ease;
                margin-top: 15px;
            }

            .btn-style:hover {
                background-color: #555;
            }
        </style>

        <center>
            <div class="timeline">
                <div class="container left">
                    <div class="content">
                        <h2>Multas</h2>
                        <p>
                        <ul>
                            <li>
                                <strong>Data:</strong> 01/01/2023
                            </li>
                            <li>
                                <strong>Valor:</strong> R$100,00
                            </li>
                            <li>
                                <strong>Descrição:</strong> Excesso de Velocidade
                            </li>
                        </ul>
                        </p>
                        <p>
                        <ul>
                            <li>
                                <strong>Data:</strong> 10/08/2023
                            </li>
                            <li>
                                <strong>Valor:</strong> R$200,00
                            </li>
                            <li>
                                <strong>Descrição:</strong> Ultrapassagem Irregular
                            </li>
                        </ul>
                        <p>
                        </p>
                        <p>
                        <ul>
                            <li>
                                <strong>Data:</strong> 05/09/2023
                            </li>
                            <li>
                                <strong>Valor:</strong> R$100,00
                            </li>
                            <li>
                                <strong>Descrição:</strong> Excesso de Velocidade
                            </li>
                        </ul>
                        </p>
                        <p>
                        <ul>
                            <li>
                                <strong>Data:</strong> 10/09/2023
                            </li>
                            <li>
                                <strong>Valor:</strong> R$300,00
                            </li>
                            <li>
                                <strong>Descrição:</strong> Som acima do Permitido
                            </li>
                        </ul>
                        <p>
                        </p>

                    </div>
                </div>
                <div class="container right">
                    <div class="content">
                        <h2>Histórico de Reservas</h2>
                        <p>Consulte todas as reservas realizadas na AVR</p>
                        <strong>
                            <li>Sem Reservas Ativas</li>
                        </strong>
                    </div>
                </div>
                <div class="container left">
                    <div class="content">
                        <h2>Cadastrar Pagamento</h2>
                        <a class="nav-link btn-style" href="CadastroCartao.html">Pagamento</a>
                    </div>
                </div>
                <div class="container right">
                    <div class="content">
                        <h2>Reservar</h2>
                        <a class="nav-link btn-style" href="Reservas.html">Reservar Agora</a>
                    </div>
                </div>
            </div>
        </center>


        <footer>
            <p>&copy; 2023 Aluguel de Veículos</p>
        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b3qf8/ueBbqgt1r+dHf87L/G1bHDOQlUGuNq6oNjhJxIk2q4gXFWpHI7d+LlJcwX"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./script.js"></script>

</html>