<?php

session_start();
$login = false;
if ($_SESSION["username"]) {
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
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            color: #fff;
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
                                <a class="nav-link active" aria-current="page" href="PaginaInicial.php" style="color: white">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Reservas.php" style="color: white">Reservas</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
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


        <h1>Reserva de Veículos</h1>
        <form class="container" action="cadastra_reserva.php" method="POST">
            <h2>Dados da Reserva</h2>

            <div>
                <label for="categoria">Categoria do Veículo:</label>
                <input type="hidden" name="categoria" value="economico">
                <select id="categoria" name="categoria">
                    <option value="economico">Econômico</option>
                    <option value="intermediario">Intermediário</option>
                    <option value="suv">SUV</option>
                    <option value="minivan">Minivan</option>
                    <option value="executivo">Executivo</option>
                </select>
            </div>

            <label for="data_retirada">Data e Hora de Retirada:</label>
            <input type="datetime-local" id="data_retirada" name="data_retirada" required><br>

            <label for="data_devolucao">Data e Hora de Devolução:</label>
            <input type="datetime-local" id="data_devolucao" name="data_devolucao" required><br>

            <label for="usuario">Informações da CNH:</label><br>
            <input type="text" id="usuario" name="usuario"><br>

            <input type="checkbox" id="motoristaAdicionalCheckbox" name="motorista_adicional" onchange="mostrarCamposMotoristaAdicional(this)">
            <label for="motoristaAdicionalCheckbox">Desejo um motorista adicional</label>

            <div id="camposMotoristaAdicional" style="display: none;">
                <input type="text" name="nome_motorista" placeholder="Nome do motorista">
                <input type="text" name="cnh_cliente" placeholder="CNH do motorista">
            </div>

            <script>
                function mostrarCamposMotoristaAdicional(checkbox) {
                    var camposMotoristaAdicional = document.getElementById('camposMotoristaAdicional');
                    camposMotoristaAdicional.style.display = checkbox.checked ? 'block' : 'none';
                }
            </script>

            <label for="opcionais">Opcionais (selecionar os desejados):</label><br>

            <input type="checkbox" id="cadeira_bebe" name="opcionais[]" value="cadeira_bebe">
            <label for="cadeira_bebe">Cadeira de Bebê (R$30/dia)</label><br>

            <input type="checkbox" id="assento_elevacao" name="opcionais[]" value="assento_elevacao">
            <label for="assento_elevacao">Assento de Elevação (R$30/dia)</label><br>

            <input type="checkbox" id="gps" name="opcionais[]" value="gps">
            <label for="gps">GPS (R$20/dia)</label><br>

            <input type="checkbox" id="condutor-adicional" name="opcionais[]" value="condutor_adicional">
            <label for="condutor-adicional">Condutor Adicional (R$15/dia)</label>

            <input type="checkbox" id="termos" name="termos" value="validar-termos">
            <label for="termos"><a href="Termos.html">Li e aceito os termos!</a></label>

            <input type="submit" value="Reservar">
        </form>
        <footer>
            <p>&copy; 2023 Aluguel de Veículos</p>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./script.js"></script>

</html>