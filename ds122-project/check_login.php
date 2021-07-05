<?php
require "db_functions.php";
require "authenticate.php";

$error = false;
$senha = $email = "";

if (!$login && $_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["email"]) && isset($_POST["senha"])) {

    $link = connect_db();

    $email = mysqli_real_escape_string($link,$_POST["email"]);
    $senha = mysqli_real_escape_string($link,$_POST["senha"]);
    $senha = ($senha);

    $sql = "SELECT id,nome,email,senha FROM grr20193854_matricula
            WHERE email = '$email';";

    $result = mysqli_query($link, $sql);
    if($result){
      if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($user["password"] == $password) {

          $_SESSION["id"] = $id["id"];
          $_SESSION["nome"] = $nome["nome"];
          $_SESSION["email"] = $email["email"];

          header("Location: " . dirname($_SERVER['SCRIPT_NAME']) . "/area_aluno.php");
          exit();
        }
        else {
          $error_msg = "Senha incorreta!";
          $error = true;
        }
      }
      else{
        $error_msg = "Usuário não encontrado!";
        $error = true;
      }
    }
    else {
      $error_msg = mysqli_error($link);
      $error = true;
    }
  }
  else {
    $error_msg = "Por favor, preencha todos os dados.";
    $error = true;
  }
}
?>