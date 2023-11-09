<?php
    $servername = "localhost";
    $database = "avr_locacoes";
    $username = "root";
    $password = "";
    $dbname = "avr_locacoes";
    try{
        $conn=new PDO("mysqli:host=$servername;dbname=$dbname", $username, $password);
    }   

    catch(Exception $e){
        $msg=array("codigo"=>0,"texto"=>"Erro de Conexão.");
        header('Content-Type: application/json; charset=utf-8');
        echo(json_encode($msg));
    }
?>