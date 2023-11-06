<?php
    require("conecta.php");

    $cpf_cliente = $_POST['cpf_cliente'];
    $nome_cliente = $_POST['nome_cliente'];
    $telefone_cliente = $_POST['telefone_cliente'];
    $cnh_cliente = $_POST['cnh_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $endereco_cliente = $_POST['endereco_cliente'];
    $senha_cliente = $_POST['senha_cliente'];
    $num_cartao_cliente = $_POST['num_cartao_cliente'];
    $val_cartao_cliente = $_POST['val_cartao_cliente'];
    $cod_seguranca = $_POST['cod_seguranca'];

    $sql = "INSERT INTO cadastro_cliente (CPF_LOGIN, NOME_LOGIN, TELEFONE_CLIENTE, CNH_CLIENTE, EMAIL_LOGIN, ENDERECO_LOGIN, SENHA_LOGIN, NUMERO_CARTAO_LOGIN, VALIDADE_CARTAO, CODIGO_SEGURANCA_LOGIN)
    VALUES ('$cpf_cliente', '$nome_cliente', '$telefone_cliente', '$cnh_cliente', '$email_cliente', '$endereco_cliente', '$senha_cliente', '$num_cartao_cliente', '$val_cartao_cliente', '$cod_seguranca')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Cadastro Realizado com Sucesso</h1>";
      echo "<a href='PaginaInicial.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO:</h3>: " . $sql . "<br>" . $conn->error;
    }
?>
