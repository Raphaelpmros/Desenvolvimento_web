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
    <div class="body">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/Img_home/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/Img_home/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/Img_home/3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <p id="promocao" class="promocao">Destaques</p>
        <section class="vehicle-list">
            <div class="vehicle">
                <img src="./assets/Img_home/mobi.jpg" alt="Econômico">
                <h2>Fiat Mobi<br>2021</h2>
                <p>Carros compactos para o seu dia a dia. Ideal para viagens curtas.<br> <br> <br>O Fiat Mobi é um compacto, ágil e econômico, ideal para suas deslocações urbanas. Com um design compacto e prático, o Mobi oferece facilidade de estacionamento e eficiência no consumo de combustível. Seu interior é confortável e versátil, tornando-o perfeito para viagens urbanas. Alugue o Fiat Mobi hoje e aproveite a mobilidade e a praticidade que ele oferece.</p>
                <p>Preço Diária: R$85,00 </p>

                <button type="button" id="reserve-button-mobi"><a href="./Reserva_economico.php">Reservar Veículo</a></button>

            </div>

            <div class="vehicle">
                <img src="./assets/Img_home/onix.jpg" alt="Intermediário">
                <h2>Onix<br>2021</h2>
                <p>Carros hatch ou sedan com mais espaço e conforto.<br> <br> <br>Descubra o Chevrolet Onix, um compacto versátil e econômico, perfeito para suas aventuras urbanas. Com um design moderno e eficiência no consumo de combustível, o Onix oferece conforto e tecnologia para tornar suas viagens ainda mais resistentes. Equipado com recursos de segurança avançados e um interior espaçoso, o Onix é a escolha ideal para explorar a cidade com estilo e praticidade. Alugue o Chevrolet Onix hoje e experimente a combinação perfeita de desempenho e economia.</p>
                <p>Preço Diária: R$103,00</p>
                <button type="button" id="reserve-button-onix"><a href="./Reserva_intermediario.php">Reservar Veículo</a></button>

            </div>

            <div class="vehicle">
                <img src="./assets/Img_home/creta.jpg" alt="SUV">
                <h2>Creta<br>2020</h2>
                <p>Veículos SUV para aventuras e espaço extra.<br> <br> <br>O Hyundai Creta é um SUV compacto projetado para aventuras urbanas e além. Com um design moderno e robusto, o Creta oferece espaço, conforto e conforto. Equipado com recursos de segurança avançados e uma gama de opções de motorização, o Creta é perfeito para famílias e aventureiros. Alugue o Hyundai Creta e explore a cidade com estilo e confiança.</p>
                <p>Preço Diária: R$135,00</p>
                <button type="button" id="reserve-button-creta"><a href="./Reserva_suv.php">Reservar Veículo</a></button>

            </div>

            <div class="vehicle">
                <img src="./assets/Img_home/livina.jpg" alt="Minivan">
                <h2>livina<br>2018</h2>
                <p>Minivans espaçosas para viagens em grupo ou família.<br> <br> <br>O Fiat Mobi é um compacto, ágil e econômico, ideal para suas deslocações urbanas. Com um design compacto e prático, o Mobi oferece facilidade de estacionamento e eficiência no consumo de combustível. Seu interior é confortável e versátil, tornando-o perfeito para viagens urbanas. Alugue o Fiat Mobi hoje e aproveite a mobilidade e a praticidade que ele oferece.</p>
                <p>Preço Diária: R$158,00</p>
                <button type="button" id="reserve-button"><a href="./Reserva_minivan.php">Reservar Veículo</a></button>

            </div>

            <div class="vehicle">
                <img src="./assets/Img_home/jetta3.jpg" alt="Executivo">
                <h2>Jetta GLI<br>2022</h2>
                <p>Carros de luxo para viagens de negócios e conforto extra.<br> <br> <br>O Nissan Livina é um carro familiar versátil que combina espaço, conforto e praticidade. Com amplo espaço para passageiros e bagagem, o Livina é perfeito para viagens em família. Sua tecnologia avançada e eficiência no consumo de combustível garantem uma experiência agradável na estrada. Alugue o Nissan Livina e aproveite viagens confortáveis e sem complicações.</p>

                <p>Preço Diária: R$230,00</p>
                <button type="button" id="reserve-button"><a href="./Reserva_executivo.php">Reservar Veículo</a></button>
            </div>
            <footer>
                <p>&copy; 2023 Aluguel de Veículos</p>
            </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./script.js"></script>

</html>