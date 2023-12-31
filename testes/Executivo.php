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
    <section class="vehicle-list">
        <div class="vehicle">
            <img src="./assets/Img_executivo/Mercedes-Benz_E-Class_2023.jpg" alt="Executivo">
            <h2>Mercedes-Benz E-Class<br>2023</h2>
            <p>Um carro executivo de luxo para viagens de negócios e ocasiões especiais.<br> <br> <br>O Mercedes-Benz E-Class combina elegância, desempenho e tecnologia de ponta. Com um interior luxuoso, assentos de couro e recursos avançados de segurança, é a escolha perfeita para viagens de negócios e eventos especiais. Alugue o Mercedes-Benz E-Class hoje e viaje com estilo e conforto.</p>
            <p>Condições do veículo: Novo</p>
            <p>Combustível: Etanol</p>
            <p>Preço Diária: R$230,00 </p>

            <button type="button" id="reserve-button-e-class"><a href="./Reserva_executivo.php">Reservar Veículo</a></button>
        </div>

        <div class="vehicle">
            <img src="./assets/Img_executivo/BMW_5_Series_2023.jpg" alt="Executivo">
            <h2>BMW 5 Series<br>2023</h2>
            <p>Um sedã executivo de alta performance para reuniões de negócios e viagens premium.<br> <br> <br>O BMW 5 Series é conhecido por seu design elegante e desempenho excepcional. Com uma cabine espaçosa, tecnologia avançada e dirigibilidade suave, é ideal para reuniões de negócios e viagens de luxo. Alugue o BMW 5 Series hoje e experimente o melhor em carros executivos.</p>
            <p>Condições do veículo: Novo</p>
            <p>Combustível: Etanol</p>
            <p>Preço Diária: R$230,00 </p>

            <button type="button" id="reserve-button-5-series"><a href="./Reserva_executivo.php">Reservar Veículo</a></button>
        </div>


        <div class="vehicle">
            <img src="./assets/Img_executivo/Audi_A6_2023.jpg" alt="Executivo">
            <h2>Audi A6<br>2023</h2>
            <p>Um sedã executivo de alta classe para viagens de negócios e experiências premium.<br> <br> <br>O Audi A6 combina luxo, tecnologia e desempenho de ponta. Com seu interior requintado, características avançadas de entretenimento e condução suave, é a escolha ideal para viagens de negócios e experiências premium. Alugue o Audi A6 hoje e eleve suas viagens executivas.</p>
            <p>Condições do veículo: Novo</p>
            <p>Combustível: Gasolina</p>
            <p>Preço Diária: R$230,00 </p>

            <button type="button" id="reserve-button-a6"><a href="./Reserva_executivo.php">Reservar Veículo</a></button>
        </div>

        <div class="vehicle">
            <img src="./assets/Img_executivo/Lexus_LS_2023.jpg" alt="Executivo">
            <h2>Lexus LS<br>2023</h2>
            <p>Um sedã de luxo para viagens executivas e conforto supremo.<br> <br> <br>O Lexus LS é sinônimo de luxo e conforto. Seu interior é revestido de couro de alta qualidade, e os recursos de entretenimento e tecnologia são de última geração. Com uma experiência de direção suave e silenciosa, é perfeito para viagens executivas e ocasiões especiais. Alugue o Lexus LS hoje e experimente o requinte em sua forma mais pura.</p>
            <p>Condições do veículo: Novo</p>
            <p>Combustível: Gasolina</p>
            <p>Preço Diária: R$230,00 </p>

            <button type="button" id="reserve-button-lexus-ls"><a href="./Reserva_executivo.php">Reservar Veículo</a></button>
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
        <footer>
            <p>&copy; 2023 Aluguel de Veículos</p>
        </footer>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./script.js"></script>

</html>