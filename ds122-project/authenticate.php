<?php
  session_start();

  if (isset($_SESSION["id"]) && isset($_SESSION["nome"]) && isset($_SESSION["email"])) {
    $login = true;
    $user_id = $_SESSION["id"];
    $user_name = $_SESSION["nome"];
    $user_email = $_SESSION["email"];
  }
  else{
    $login = false;
  }

?>