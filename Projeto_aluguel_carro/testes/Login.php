<?php
require("conecta.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $username = $_POST["username"];
     $password = $_POST["senha_cliente"];

     // Consulta SQL para verificar as credenciais do usuário na tabela "cadastro_cliente"
     $sql = "SELECT CPF_LOGIN, NOME_LOGIN, SENHA_LOGIN FROM cadastro_cliente WHERE NOME_LOGIN = '$username'";
     $result = mysqli_query($conn, $sql);

     if ($result) {
         $user = mysqli_fetch_assoc($result);
         if ($user) {
             $hash_senha_armazenada = $user["SENHA_LOGIN"];
             if (password_verify($password, $hash_senha_armazenada)) {
                 // Credenciais válidas
                 // Inicie a sessão e redirecione para a página desejada
                 $_SESSION["username"] = $user["NOME_LOGIN"]; // Use o campo correto como ID do usuário
                 $_SESSION["senha_cliente"] = $user["SENHA_LOGIN"];
                 header("Location: PaginaInicial.html"); // Redirecione para a página de perfil
                 exit();
             } else {
                 // Senha incorreta
                 echo "Senha incorreta.";
             }
         } else {
             // Usuário não encontrado
             echo "Usuário não encontrado.";
         }
     } else {
         // Erro na consulta SQL
         echo "Erro na consulta: " . mysqli_error($conn);
     }
 }
?>

<?php
// session_start();
// require("conecta.php");

// $dadosForm = file_get_contents("php://input");
// $dadosForm = json_decode($dadosForm);
// $nome = $dadosForm->username; // Alterado de $ra para $nome para corresponder à sua coluna NOME_LOGIN
// $senha = $dadosForm->senha_cliente; // Alterado para corresponder à sua coluna SENHA_LOGIN

// $sql = "SELECT CPF_LOGIN, NOME_LOGIN FROM cadastro_cliente WHERE NOME_LOGIN = :par_nome AND SENHA_LOGIN = SHA2(:par_senha, 256)";
// $stmt = $conn->prepare($sql);
// $stmt->execute(array(":par_nome" => $nome, ":par_senha" => $senha));

// $result = $stmt->fetchAll(PDO::FETCH_OBJ);
// if (count($result) > 0) {
//     // Usuário/senha correspondem
//     $_SESSION["logado"] = true;
//     $_SESSION["usuario"] = $result[0]->CPF_LOGIN; // Alterado para CPF_LOGIN, mas você pode usar o campo correto
//     $msg = array("codigo" => 1, "texto" => "Seja bem-vindo.");
// } else {
//     // Usuário/senha incorretos
//     $msg = array("codigo" => 0, "texto" => "Usuário/senha incorretos.");
// }

// header('Content-Type: application/json; charset=utf-8');
// echo(json_encode($msg));
?>

      
