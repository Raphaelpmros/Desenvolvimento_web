    
<?php
ini_set("display_errors", 1);
require("conecta.php");

$x=file_get_contents('php://input');

$x=json_decode($x);

$cpf_cliente=$x->cpf_cliente;
$nome_cliente=$x->username;
$telefone_cliente=$x->telefone_cliente;
$cnh_cliente=$x->cnh_cliente;
$email_cliente=$x->email_cliente;
$endereco_cliente=$x->endereco_cliente;
$senha_cliente=$x->senha_cliente;
$hash_senha = hash('sha256', $senha_cliente);

$sql = "INSERT INTO cadastro_cliente (CPF_LOGIN, NOME_LOGIN, TELEFONE_CLIENTE, CNH_CLIENTE, EMAIL_LOGIN, ENDERECO_LOGIN, SENHA_LOGIN)
    VALUES(:par_CPF_LOGIN, :par_NOME_LOGIN, :par_TELEFONE_CLIENTE, :par_CNH_CLIENTE, :par_EMAIL_LOGIN, :par_ENDERECO_LOGIN, :par_SENHA_LOGIN)";
$stmt = $conn->prepare($sql);
$dados = array(
    ":par_CPF_LOGIN" => $cpf_cliente,
    ":par_NOME_LOGIN" => $nome_cliente,
    ":par_TELEFONE_CLIENTE" => $telefone_cliente,
    ":par_CNH_CLIENTE" => $cnh_cliente,
    ":par_EMAIL_LOGIN" => $email_cliente,
    ":par_ENDERECO_LOGIN" => $endereco_cliente,
    ":par_SENHA_LOGIN" => $hash_senha  
);

$result=$stmt->execute($dados);

if($result){
  $msg=array("codigo"=>1, "texto"=>"Cadastro realizado com sucesso!");
} else{
  $msg=array("codigo"=>0,"texto"=>"Erro ao realizar o cadastro.");
}
header('Content-Type:application/json; charset=utf-8');
echo(json_encode($msg));
