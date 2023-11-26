<?php
session_start();
 $login=false;
    if($_SESSION["username"]){
        $login=true;
        $nomeusuario=$_SESSION["nome"];
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
                 if(!$login){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.html" style="color: white;">Login</a>
                    </li>
                <?php
                 }
                 else{
                    ?>
                        <li class="nav-item">
                        <a class="nav-link" href="perfil.php" style="color: white;"><?php echo($nomeusuario);?> - Perfil</a>
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
                <img src="./assets/Img_SUV/Toyota RAV4 2023.jpg" alt="SUV">
                <h2>Toyota RAV4<br>2023</h2>
                <p>Um SUV versátil para aventuras familiares e viagens longas.<br> <br> <br>O Toyota RAV4 oferece espaço, conforto e desempenho para todas as suas viagens. Com tração nas quatro rodas e amplo espaço de carga, é perfeito para aventuras ao ar livre e viagens em família. Alugue o Toyota RAV4 hoje e desfrute da versatilidade e confiabilidade deste SUV.</p>
                <p>Condições do veículo: Amassado na porta do motorista</p>
                <p>Combustível: Diesel-S10</p>
                <p>Preço Diária: R$135,00</p>
                
                <button type="button" id="reserve-button-rav4"><a href="./Reservas.html">Reservar Veículo</a></button>
            </div>

            <div class="vehicle">
                <img src="./assets/Img_SUV/Honda_CR-V_2023.jpg" alt="SUV">
                <h2>Honda CR-V<br>2023</h2>
                <p>Um SUV familiar espaçoso com recursos avançados de segurança.<br> <br> <br>O Honda CR-V oferece espaço amplo para passageiros e um interior confortável. Além disso, possui recursos avançados de segurança para tranquilidade durante as viagens em família. Alugue o Honda CR-V hoje e experimente a combinação de espaço e segurança que ele oferece.</p>
                <p>Condições do veículo: risco na lateral direita</p>
                <p>Combustível: Diesel-S10</p>
                <p>Preço Diária: R$135,00</p>
                
                <button type="button" id="reserve-button-cr-v"><a href="./Reservas.html">Reservar Veículo</a></button>
            </div>

            <div class="vehicle">
                <img src="./assets/Img_SUV/Ford_Explorer_2023.jpg" alt="SUV">
                <h2>Ford Explorer<br>2023</h2>
                <p>Um SUV espaçoso e potente para viagens em grande estilo.<br> <br> <br>O Ford Explorer é conhecido por seu espaço generoso e desempenho poderoso. Com uma cabine luxuosa e capacidade de reboque, é perfeito para viagens longas e aventuras familiares. Alugue o Ford Explorer hoje e viaje com grande estilo e conforto.</p>
                <p>Condições do veículo: Novo</p>
                <p>Combustível: Diesel-S10</p>
                <p>Preço Diária: R$135,00</p>
                
                <button type="button" id="reserve-button-explorer"><a href="./Reservas.html">Reservar Veículo</a></button>
            </div>

            <div class="vehicle">
                <img src="./assets/Img_SUV/Chevrolet_Tahoe_2023.jpg" alt="SUV">
                <h2>Chevrolet Tahoe<br>2023</h2>
                <p>Um SUV robusto com capacidade para família e bagagem.<br> <br> <br>O Chevrolet Tahoe é ideal para viagens em família e aventuras ao ar livre. Com seu interior espaçoso e capacidade de carga generosa, pode acomodar confortavelmente todos os passageiros e sua bagagem. Alugue o Chevrolet Tahoe hoje e aproveite as aventuras com toda a família.</p>
                <p>Condições do veículo: Novo</p>
                <p>Combustível: Diesel-S10</p>
                <p>Preço Diária: R$135,00</p>
                
                <button type="button" id="reserve-button-tahoe"><a href="./Reservas.html">Reservar Veículo</a></button>
            </div>
        <footer>
            <p>&copy; 2023 Aluguel de Veículos</p>
        </footer>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./script.js"></script>
</html>