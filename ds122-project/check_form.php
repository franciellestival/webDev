<?php
function verifica_campo($texto){
  $texto = trim($texto);
  $texto = stripslashes($texto);
  $texto = htmlspecialchars($texto);
  return $texto;
}

$nome = "";
$sobrenome = "";
$email = "";
$comentario = "";

$nomeErr = "";
$sobrenomeErr = "";
$emailErr = "";
$comentarioErr = "";

$erro = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["nome"])) {
    $nomeErr = "*Nome é obrigatório";
    $erro = true;
  } else {
    $nome = verifica_campo($_POST["nome"]);

  if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
    $nomeErr = "*Somente letras e espaços são permitidos";
    }
  }

  if (empty($_POST["sobrenome"])) {
    $sobrenomeErr = "*Sobrenome é obrigatório";
    $erro = true;
  } else {
    $sobrenome = verifica_campo($_POST["sobrenome"]);

  if (!preg_match("/^[a-zA-Z-' ]*$/",$sobrenome)) {
    $sobrenomeErr = "*Somente letras e espaços são permitidos";
    }  
  }

  if (empty($_POST["email"])) {
    $emailErr = "*Email é obrigatório";
    $erro = true;
  } else {
    $email = verifica_campo($_POST["email"]);

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "*Formato de email inválido";
    }
  }

  if (empty($_POST["comentario"])) {
    $comentarioErr = "*Comentário é obrigatório";
    $erro = true;
  } else {
    $comentario = verifica_campo($_POST["comentario"]);
  }
  

}


?>