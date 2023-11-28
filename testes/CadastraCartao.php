<?php
require("conecta.php");

$num_cartao_cliente = $_POST['num_cartao_cliente'];
$bandeira_cartao = $_POST['bandeira_cartao'];
$nome_impresso = $_POST['nome_impresso'];
$val_cartao_cliente = $_POST['val_cartao_cliente'];
$cod_seguranca = $_POST['cod_seguranca'];

$sql = "INSERT INTO cartao (NUM_CARTAO, BANDEIRA, NOME_IMPRESSO_CARTAO, VALIDADE_CARTAO, COD_SEGURANCA)
    VALUES ('$num_cartao_cliente', '$bandeira_cartao', '$nome_impresso', '$val_cartao_cliente', '$cod_seguranca')";

if ($conn->query($sql) === TRUE) {
  echo "<center><h1>Cartão Cadastrado com Sucesso</h1>";
  echo "<a href='PaginaInicial.html'><input type='button' value='Voltar'></a></center>";
} else {
  echo "<h3>OCORREU UM ERRO:</h3>: " . $sql . "<br>" . $conn->error;
}
