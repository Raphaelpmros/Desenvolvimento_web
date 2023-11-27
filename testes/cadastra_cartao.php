<?php
  ini_set("display_errors", 1);
  require("conecta.php");
  
  $x=file_get_contents('php://input');
  
  $x=json_decode($x);
  
  $num_cartao_cliente=$x->num_cartao_cliente;
  $bandeira_cartao=$x->bandeira_cartao;
  $nome_impresso=$x->nome_impresso;
  $val_cartao_cliente=$x->val_cartao_cliente;
  $cod_seguranca=$x->cod_seguranca;
  
  $sql = "INSERT INTO cartao (NUM_CARTAO, BANDEIRA, NOME_IMPRESSO_CARTAO, VALIDADE_CARTAO, COD_SEGURANCA)
      VALUES (:par_NUM_CARTAO,:par_BANDEIRA,:par_NOME_IMPRESSO_CARTAO,:par_VALIDADE_CARTAO,:par_COD_SEGURANCA)";
  
  $stmt = $conn->prepare($sql);
  $dados = array(
      ":par_NUM_CARTAO" => $num_cartao_cliente,
      ":par_BANDEIRA" => $bandeira_cartao,
      ":par_NOME_IMPRESSO_CARTAO" => $nome_impresso,
      ":par_VALIDADE_CARTAO" => $val_cartao_cliente,
      ":par_COD_SEGURANCA" => $cod_seguranca
  );
  
  $result=$stmt->execute($dados);
  
  if($result){
    $msg=array("codigo"=>1, "texto"=>"Cadastro realizado com sucesso!");
  } else{
    $msg=array("codigo"=>0,"texto"=>"Erro ao realizar o cadastro.");
  }
  header('Content-Type:application/json; charset=utf-8');
  echo(json_encode($msg));
?>
