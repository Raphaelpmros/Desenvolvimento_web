<?php
require("conecta.php");

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoria = $_POST['categoria'];
    $data_retirada = $_POST['data_retirada'];
    $data_devolucao = $_POST['data_devolucao'];
    $cnh_cliente = $_POST['cnh_cliente'];
    $cadeira_bebe = isset($_POST['cadeira_bebe']) ? $_POST['cadeira_bebe'] : 0;
    $assento_elevacao = isset($_POST['assento_elevacao']) ? $_POST['assento_elevacao'] : 0;
    $gps = isset($_POST['gps']) ? $_POST['gps'] : 0;

    try {
        // Use prepared statements para evitar problemas de SQL injection
        $stmt = $conn->prepare("INSERT INTO reservas (CATEGORIA_VEICULO, DATA_RETIRADA, DATA_DEVOLUCAO, CNH_CLIENTE, CADEIRA_BEBE, ASSENTO_ELEVACAO, GPS)
        VALUES (:categoria, :data_retirada, :data_devolucao, :cnh_cliente, :cadeira_bebe, :assento_elevacao, :gps)");

        // Ajuste: Atribua as variáveis diretamente a bindParam, sem a necessidade de passar por variáveis intermediárias
$stmt->bindParam(':categoria', $categoria);
$stmt->bindParam(':data_retirada', $data_retirada);
$stmt->bindParam(':data_devolucao', $data_devolucao);
$stmt->bindParam(':cnh_cliente', $cnh_cliente);
$stmt->bindParam(':cadeira_bebe', $cadeira_bebe);
$stmt->bindParam(':assento_elevacao', $assento_elevacao);
$stmt->bindParam(':gps', $gps);

        $stmt->execute();

        echo "<center><h1>Reserva Cadastrada com Sucesso</h1>";
        echo "<a href='PaginaInicial.php'><input type='button' value='Voltar'></a></center>";
    } catch (PDOException $e) {
        echo "<h3>OCORREU UM ERRO:</h3>: " . $e->getMessage();
    }
} else {
    // Se o formulário não foi submetido, redireciona para a página do formulário
    header("Location: PaginaDoFormulario.php");
    exit();
}
