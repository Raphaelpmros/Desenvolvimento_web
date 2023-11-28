<?php
require("conecta.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["senha_cliente"];

    // Consulta SQL para verificar as credenciais do usuário na tabela "cadastro_cliente"
    $sql = "SELECT CPF_LOGIN, NOME_LOGIN, SENHA_LOGIN FROM avr_locacoes.cadastro_cliente WHERE CPF_LOGIN = :par_CPF_LOGIN and SENHA_LOGIN=sha2(:par_SENHA_LOGIN,256)";
    $stmt = $conn->prepare($sql);
    $dados = array(
        ":par_CPF_LOGIN" => $username,
        ":par_SENHA_LOGIN" => $password
    );
    $stmt->execute($dados);
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);

    if (count($result) > 0) {
        // Credenciais válidas
        // Inicie a sessão e redirecione para a página desejada
        $_SESSION["username"] = $result[0]->CPF_LOGIN; // Use o campo correto como ID do usuário
        $_SESSION["nome"] = $result[0]->NOME_LOGIN; // Use o campo correto como ID do usuário
        header("Location: PaginaInicial.php"); // Redirecione para a página de perfil
        exit();
    } else {
        // Senha incorreta
        echo "Senha incorreta.";
    }
}
