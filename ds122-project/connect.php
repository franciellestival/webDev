<?php

//credentials

$servername = "gitlab.tadsufpr.net.br";
$username = "web1";
$pass = "tads";
$dbname = "ds122_2020_especial_1";

//conexão

$link = mysqli_connect($servername, $username, $pass, $dbname);

//checar conexão 

if ($link === false){
	die("Erro: Conexão não realizada." . myqsli_conect_error());
}

// imprimir informação do host

echo "Conexão realizada com sucesso. Host info:" . mysqli_get_host_info($link);

//criando a database

  $sql = "CREATE DATABASE $dbname";

  if (mysqli_query($link, $sql)) {

      echo "Database criada com sucesso";

  } else {

      echo "Erro ao criar database: " . mysqli_error($link);
  }

mysqli_close($link);

?>