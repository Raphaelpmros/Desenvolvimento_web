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
                        <?php
                        if (!$login) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="Login.html" style="color: white;">Login</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="perfil.php" style="color: white;"><?php echo ($nomeusuario); ?> - Perfil</a>
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
    <p id="promocao" class="promocao">Destaques</p>
    <section class="vehicle-list">
        <div class="vehicle">
            <img src="./assets/Img_economico/Volkswagen Polo 2023.jpg" alt="Carro Econômico">
            <h2>Volkswagen Polo<br>2023</h2>
            <p>Um carro compacto e econômico para deslocamentos urbanos e viagens curtas.<br> <br> <br>O Volkswagen Polo é conhecido por sua eficiência de combustível e design compacto. Com assentos confortáveis e ótima manobrabilidade, é perfeito para viagens na cidade e passeios curtos. Alugue o Volkswagen Polo hoje e economize enquanto se move com estilo.</p>
            <p>Condições do veículo: Novo</p>
            <p>Combustível: Gasolina</p>
            <p>Preço Diária: R$85,00 </p>
            <button type="button" id="reserve-button-polo"> <a href="./Reserva_economico.html">Reservar Veículo</a></button>
        </div>
        <div class="vehicle">
            <img src="./assets/Img_economico/Hyundai_i20.jpg" alt="Carro Econômico">
            <h2>Hyundai i20<br>2023</h2>
            <p>Um hatch compacto e econômico para viagens eficientes e práticas.<br> <br> <br>O Hyundai i20 oferece economia de combustível e um design moderno. Com espaço suficiente para passageiros e bagagem, é uma escolha inteligente para viagens econômicas. Alugue o Hyundai i20 hoje e desfrute da conveniência e da eficiência.</p>
            <p>Condições do veículo: Amassado no porta-malas</p>
            <p>Combustível: Etanol</p>  
            <p>Preço Diária: R$85,00 </p>
            <button type="button" id="reserve-button-i20"><a href="./Reserva_economico.html">Reservar Veículo</a></button>
        </div>
        <div class="vehicle">
            <img src="./assets/Img_economico/Ford_Fiesta_2023.png" alt="Carro Econômico">
            <h2>Ford Fiesta<br>2023</h2>
            <p>Um compacto econômico para deslocamentos diários e viagens de baixo custo.<br> <br> <br>O Ford Fiesta é um carro econômico e ágil. Com um design compacto e manobrabilidade fácil, é perfeito para uso diário e viagens econômicas. Alugue o Ford Fiesta hoje e aproveite a economia sem comprometer a qualidade.</p>
            <p>Condições do veículo: Novo</p>
            <p>Combustível: Etanol</p>
            <p>Preço Diária: R$85,00 </p>

            <button type="button" id="reserve-button-fiesta"><a href="./Reserva_economico.html">Reservar Veículo</a></button>
        </div>
        <div class="vehicle">
            <img src="./assets/Img_economico/Toyota_Yaris_2023.jpg" alt="Carro Econômico">
            <h2>Toyota Yaris<br>2023</h2>
            <p>Um carro compacto e econômico para deslocamentos urbanos e viagens eficientes.<br> <br> <br>O Toyota Yaris combina economia de combustível com um design moderno. Seu interior espaçoso e recursos de entretenimento tornam as viagens agradáveis. É a escolha ideal para deslocamentos diários e passeios econômicos. Alugue o Toyota Yaris hoje e experimente a eficiência e o conforto.</p>
            <p>Condições do veículo: Novo</p>
            <p>Combustível: Etanol</p>
            <p>Preço Diária: R$85,00 </p>
            <button type="button" id="reserve-button-yaris"><a href="./Reserva_economico.html">Reservar Veículo</a></button>
        </div>
        <section id="reservation" class="reservation-container hidden">
            <h2>Reserva de Veículo</h2>
            <form id="reservation-form" class="reservation-form">
                <label for="pickup-date">Data de Retirada:</label>
                <input type="date" id="pickup-date" required>
                <label for="return-date">Data de Devolução:</label>
                <input type="date" id="return-date" required>
                <label for="vehicle-category">Categoria de Veículo:</label>
                <select id="vehicle-category" required>
                    <option value="economico">Econômico</option>
                    <option value="intermediario">Intermediário</option>
                    <option value="suv">SUV</option>
                    <option value="minivan">Minivan</option>
                    <option value="executivo">Executivo</option>
                </select>
                <label for="add-options">Opcionais:</label>
                <input type="checkbox" id="baby-seat" value="cadeira-bebe">
                <label for="baby-seat">Cadeira de Bebê</label>
                <input type="checkbox" id="booster-seat" value="direcao-eletrica">
                <label for="booster-seat">Direção Elétrica</label>
                <input type="checkbox" id="gps" value="gps">
                <label for="gps">GPS</label>
                <button type="submit">Reservar</button>
            </form>
        </section>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 Aluguel de Veículos</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./script.js"></script>

</html>