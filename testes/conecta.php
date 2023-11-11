<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "avr_locacoes";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    $msg = array("codigo" => 0, "texto" => "Erro de Conexão: " . $e->getMessage());
    header('Content-Type: application/json; charset=utf-8');
    echo(json_encode($msg));
}
?>
