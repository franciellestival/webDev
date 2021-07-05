<?php
require "connect.php";

function connect_db(){
  global $servername, $nome, $senha, $dbname;
  $link = mysqli_connect($servername, $nome, $senha, $dbname);

  if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
  }

  return($link);
}

function disconnect_db($link){
  mysqli_close($link);
}

?>