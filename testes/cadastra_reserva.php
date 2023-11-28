<?php
require("conecta.php");

$categoria = $_POST['categoria'];
$data_retirada = $_POST['data_retirada'];
$data_devolucao = $_POST['data_devolucao'];
$cnh_cliente = $_POST['cnh_cliente'];
$motorista_adicional = $_POST['motorista_adicional'];
$cadeira_bebe = $POST['cadeira_bebe'];
$assento_elevacao = $POST['assento_elevacao'];
$gps = $POST['gps'];

$sql = "INSERT INTO reservas (CATEGORIA, DATA_RETIRADA, DATA_DEVOLUCAO, CNH_CLIENTE, MOTORISTA_ADICIONAL, CADEIRA_BEBE, ASSENTO_ELEVACAO, GPS)
    VALUES ('$categoria', '$data_retirada', '$data_devolucao', '$cnh_cliente', '$motorista_adicional', '$cadeira_bebe', '$assento_elevacao', '$gps')";

if ($conn->query($sql) === TRUE) {
    echo "<center><h1>Reserva Cadastrada com Sucesso</h1>";
    echo "<a href='PaginaInicial.html'><input type='button' value='Voltar'></a></center>";
} else {
    echo "<h3>OCORREU UM ERRO:</h3>: " . $sql . "<br>" . $conn->error;
}
