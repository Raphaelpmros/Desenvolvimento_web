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
            <img src="./assets/Img_intermediario/Honda_Civic_2023.jpg" alt="Intermediário">
            <h2>Honda Civic<br>2023</h2>
            <p>Um sedã intermediário com equilíbrio entre desempenho e conforto.<br> <br> <br>O Honda Civic é conhecido por sua confiabilidade e estilo. Com uma cabine espaçosa e recursos avançados de tecnologia, é uma escolha sólida para viagens e deslocamentos diários. Alugue o Honda Civic hoje e experimente o equilíbrio perfeito entre desempenho e conforto.</p>
            <p>Condições do veículo: Novo</p>
            <p>Combustível: Etanol</p>
            <p>Preço Diária: R$103,00 </p>

            <button type="button" id="reserve-button-civic"><a href="./Reserva_intermediario.php">Reservar Veículo</a></button>
        </div>

        <div class="vehicle">
            <img src="./assets/Img_intermediario/Mazda_6_2023.jpg" alt="Intermediário">
            <h2>Mazda 6<br>2023</h2>
            <p>Um sedã intermediário com estilo elegante e desempenho suave.<br> <br> <br>O Mazda 6 combina design elegante e dirigibilidade suave. Seu interior premium e tecnologia avançada o tornam adequado para viagens e experiências confortáveis. Alugue o Mazda 6 hoje e desfrute de um sedã intermediário que une estilo e desempenho.</p>
            <p>Condições do veículo: Novo</p>
            <p>Combustível: Etanol</p>
            <p>Preço Diária: R$103,00 </p>

            <button type="button" id="reserve-button-mazda6"><a href="./Reserva_intermediario.php">Reservar Veículo</a></button>
        </div>

        <div class="vehicle">
            <img src="./assets/Img_intermediario/Chevrolet_Malibu_2023.jpg" alt="Intermediário">
            <h2>Chevrolet Malibu<br>2023</h2>
            <p>Um sedã intermediário com espaço e conforto para viagens longas.<br> <br> <br>O Chevrolet Malibu oferece espaço, conforto e tecnologia. Com seu interior espaçoso e recursos avançados de entretenimento, é uma ótima escolha para viagens de estrada e deslocamentos. Alugue o Chevrolet Malibu hoje e aproveite o conforto e a conveniência.</p>
            <p>Condições do veículo: Amassado na porta esquerda do passageiro</p>
            <p>Combustível: Gasolina</p>
            <p>Preço Diária: R$103,00 </p>

            <button type="button" id="reserve-button-malibu"><a href="./Reserva_intermediario.php">Reservar Veículo</a></button>
        </div>

        <div class="vehicle">
            <img src="./assets/Img_intermediario/Nissan Altima 2023.jpg" alt="Intermediário">
            <h2>Nissan Altima<br>2023</h2>
            <p>Um sedã intermediário com estilo moderno e tecnologia avançada.<br> <br> <br>O Nissan Altima combina elegância e inovação. Seu interior espaçoso e recursos de tecnologia de ponta tornam as viagens confortáveis e convenientes. É uma ótima escolha para viagens de negócios e passeios em família. Alugue o Nissan Altima hoje e desfrute da sofisticação e desempenho.</p>
            <p>Condições do veículo: Novo</p>
            <p>Combustível: Etanol</p>
            <p>Preço Diária: R$103,00</p>

            <button type="button" id="reserve-button-altima"><a href="./Reserva_intermediario.php">Reservar Veículo</a></button>
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
    </header>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./script.js"></script>

</html>